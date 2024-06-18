<?php

namespace App\Http\Controllers;

use App\Helpers\ImageHelper;
use App\Http\Requests\TestimonialStoreRequest;
use App\Http\Requests\TestimonialUpdateRequest;
use App\Mail\NotificationForAdmin;
use App\Models\Testimonial;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials = Testimonial::orderBy('created_at', 'desc')->paginate(10);
        return view('dashboard.pages.testimonials.index', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.pages.testimonials.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TestimonialStoreRequest $request)
    {
        $imageHelper = new ImageHelper();
        $imagePath = $imageHelper->enregistrerImage($request->photo, 'images/testimonials');
        Testimonial::create([
            'fullname' => $request->fullname,
            'job' => $request->poste,
            'rate' => $request->note,
            'image' => $imagePath,
            'description' => $request->description,
            'status' => true,
            'slug' => Str::slug($request->fullname),
        ]);
        $admins = User::whereHas('roles', function ($query) {
            $query->where('name', 'admin');
        })->get();

        $message = "Un témoignage a été ajoutée par " . Auth::user()->firstname . ' ' . Auth::user()->lastname;

        foreach ($admins as $admin) {
            Mail::to($admin->email)->send(new NotificationForAdmin($message));
        }
        toastr()->success('Action effectuée avec succès !');
        return redirect()->route('testimonials.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        $testimonial = Testimonial::where('slug', $slug)->firstOrFail();
        return view('dashboard.pages.testimonials.show', compact('testimonial'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($slug)
    {
        $testimonial = Testimonial::where('slug', $slug)->firstOrFail();
        return view('dashboard.pages.testimonials.edit', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TestimonialUpdateRequest $request, $slug)
    {
        $testimonial = Testimonial::where('slug', $slug)->firstOrFail();

        $imagePath = null;
        $imageHelper = new ImageHelper();
        if ($request->hasFile('photo') && $request->file('photo')->isValid()) {
            $imagePath = $imageHelper->enregistrerImage($request->photo, 'images/testimonials/');

            // $imageHelper->removeImage($testimonial->photo);
        }
        // dd($testimonial->image,$imagePath);
        
        $testimonial->update([
            'fullname' => $request->fullname,
            'job' => $request->poste,
            'image' => $imagePath ? $imagePath : $testimonial->image,
            'rate' => $request->note,
            'description' => $request->description,
            'status' => true,
            'slug' => Str::slug($request->fullname),
        ]);
        
        $admins = User::whereHas('roles', function ($query) {
            $query->where('name', 'admin');
        })->get();

        $message = "Un témoignage a été modifiée par " . Auth::user()->firstname . ' ' . Auth::user()->lastname;

        foreach ($admins as $admin) {
            Mail::to($admin->email)->send(new NotificationForAdmin($message));
        }
        toastr()->success('Action effectuée avec succès !');
        return redirect()->route('testimonials.index');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function status($slug)
    {
        $testimonial = Testimonial::where('slug', $slug)->firstOrFail();
        if ($testimonial->status == true) {
            $testimonial->update(['status' => false]);
        } else {
            $testimonial->update(['status' => true]);
        }
        toastr()->success('Action effectuée avec succès !');
        return redirect()->route('testimonials.index');
    }

    public function destroy($slug)
    {
        $testimonial = Testimonial::where('slug', $slug)->firstOrFail();
        $testimonial->delete();
        $admins = User::whereHas('roles', function ($query) {
            $query->where('name', 'admin');
        })->get();

        $message = "Un témoignage a été supprimée par " . Auth::user()->firstname . ' ' . Auth::user()->lastname;

        foreach ($admins as $admin) {
            Mail::to($admin->email)->send(new NotificationForAdmin($message));
        }
        toastr()->success('Action effectuée avec succès !');
        return redirect()->route('testimonials.index');
    }
}
