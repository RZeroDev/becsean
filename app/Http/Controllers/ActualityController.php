<?php

namespace App\Http\Controllers;

use App\Helpers\ImageHelper;
use App\Http\Requests\ActualityStoreRequest;
use App\Http\Requests\ActualityUpdateRequest;
use App\Mail\NotificationForAdmin;
use App\Models\Actuality;
use App\Models\Image;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class ActualityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $actualities = Actuality::orderBy('created_at', 'desc')->paginate(10);
        return view('dashboard.pages.actualities.index', compact('actualities'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.pages.actualities.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ActualityStoreRequest $request)
    {
        // $request->validate([
        //     'media_type' => ['required', Rule::in(['video', 'image'])], 
        //     'url' => $request->input('media_type') == 'video' ? ['required', 'url'] : [], 
        //     'image' => $request->input('media_type') == 'image' ? ['required', 'image', 'mimes:jpeg,png,jpg,gif'] : [],
        // ]);
        $imagePath = null;
        $pdfPath = null;
        $imageHelper = new ImageHelper();
            $imagePath = $imageHelper->enregistrerImage($request->image, 'images/actualities');
            $actuality = Actuality::create([
                'title' => $request->titre,
                'image' => $imagePath,
                'description' => $request->contenu,
                'status' => true,
                'slug' => Str::slug($request->titre),
            ]);
        
        $admins = User::whereHas('roles', function ($query) {
            $query->where('name', 'admin');
        })->get();

        $message = "Une actualité a été ajoutée par " . Auth::user()->firstname . ' ' . Auth::user()->lastname;

        foreach ($admins as $admin) {
            Mail::to($admin->email)->send(new NotificationForAdmin($message));
        }
        toastr()->success('Action effectuée avec succès !');
        return redirect()->route('actualities.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        $actuality = Actuality::where('slug', $slug)->firstOrFail();
        return view('dashboard.pages.actualities.show', compact('actuality'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($slug)
    {
        $actuality = Actuality::where('slug', $slug)->firstOrFail();
        return view('dashboard.pages.actualities.edit', compact('actuality'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ActualityUpdateRequest $request, $slug)
    {
        // $request->validate([
        //     'media_type' => ['required', Rule::in(['video', 'image'])], 
        //     'url' => $request->input('media_type') == 'video' ? ['required', 'url'] : [], 
        //     'image' => $request->input('media_type') == 'image' ? ['nullable', 'image', 'mimes:jpeg,png,jpg,gif'] : [],
        // ]);
        $actuality = Actuality::where('slug', $slug)->firstOrFail();
        $imagePath = null;
        $pdfPath = null;
        $imageHelper = new ImageHelper();
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $imagePath = $imageHelper->enregistrerImage($request->image, 'images/actualities/');

            $imageHelper->removeImage($actuality->image);
            $actuality->update([
                'title' => $request->titre,
                'image' => $imagePath ? $imagePath : $actuality->image,
                'description' => $request->contenu,
                'slug' => Str::slug($request->titre),
            ]);
        } else {
            $actuality->update([
                'title' => $request->titre,
                'video' => $$request->url,
                'description' => $request->contenu,
                'slug' => Str::slug($request->titre),
            ]);
        }
        if ($request->hasFile('image_secondaire') && is_array($request->file('image_secondaire'))) {
            if ($actuality->images) {
                foreach ($actuality->images as $image) {
                    $imageHelper->removeImage($image->url);
                    $image->delete();
                }
            }

            foreach ($request->file('image_secondaire') as $key => $image) {
                if ($image->isValid()) {
                    $imageSecondaire = $imageHelper->enregistrerImage($image, 'images/actualitys/secondaire');
                    Image::create([
                        'url' => $imageSecondaire,
                        'actuality_id' => $actuality->id,
                    ]);
                }
            }
        }

        $admins = User::whereHas('roles', function ($query) {
            $query->where('name', 'admin');
        })->get();

        $message = "Une actualité a été modifiée par " . Auth::user()->firstname . ' ' . Auth::user()->lastname;

        foreach ($admins as $admin) {
            Mail::to($admin->email)->send(new NotificationForAdmin($message));
        }
        toastr()->success('Action effectuée avec succès !');
        return redirect()->route('actualities.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function status($slug)
    {
        $actuality = Actuality::where('slug', $slug)->firstOrFail();
        if ($actuality->status == true) {
            $actuality->update(['status' => false]);
        } else {
            $actuality->update(['status' => true]);
        }
        toastr()->success('Action effectuée avec succès !');
        return redirect()->route('actualities.index');
    }

    public function destroy($slug)
    {
        $actuality = Actuality::where('slug', $slug)->firstOrFail();
        $actuality->delete();
        $linkedin = new LinkedinController();
        if ($actuality->linkedin_post_id)
            $linkedin->unPublishLinkedinPost($actuality->linkedin_post_id);

        $facebook = new FacebookController();
        if ($actuality->facebook_post_id)
            $facebook->unPublishFacebookPost($actuality->facebook_post_id); 

        $twitter = new TwitterController();
        if ($actuality->twitter_post_id)
            $twitter->unPublishTwitterPost($actuality->twitter_post_id);

        $instagram = new FacebookController();
        if ($actuality->instagram_post_id)
            $instagram->unPublishInstagramPost($actuality->instagram_post_id);

        $actuality->delete();
        $admins = User::whereHas('roles', function ($query) {
            $query->where('name', 'admin');
        })->get();

        $message = "Une actualité à été supprimée par l'utilisateur: " . Auth::user()->firstname . ' ' . Auth::user()->lastname;

        foreach ($admins as $admin) {
            Mail::to($admin->email)->send(new NotificationForAdmin($message));
        }
        toastr()->success('Action effectuée avec succès !');
        return redirect()->route('actualities.index');
    }
}
