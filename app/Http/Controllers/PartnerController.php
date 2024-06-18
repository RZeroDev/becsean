<?php
namespace App\Http\Controllers;

use App\Helpers\ImageHelper;
use App\Http\Requests\PartnerStoreRequest;
use App\Http\Requests\PartnerUpdateRequest;
use App\Mail\NotificationForAdmin;
use App\Models\Partner;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $partners = Partner::orderBy('created_at', 'desc')->paginate(10);
        return view('dashboard.pages.partners.index', compact('partners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.pages.partners.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PartnerStoreRequest $request)
    {
        $imageHelper = new ImageHelper();
        $imagePath = $imageHelper->enregistrerImage($request->logo, 'images/partners');
        Partner::create([
            'name' => $request->nom,
            'logo' => $imagePath,
            'slug' => Str::slug($request->nom),
        ]);
        $admins = User::whereHas('roles', function ($query) {
            $query->where('name', 'admin');
         })->get();

         $message = "Un partenaire a été ajoutée par ".Auth::user()->firstname.' '.Auth::user()->lastname;

        foreach($admins as $admin){
            Mail::to($admin->email)->send(new NotificationForAdmin($message));
        }
        toastr()->success('Action effectuée avec succès !');
        return redirect()->route('partners.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Partner $partner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($slug)
    {
        $partner = Partner::where('slug', $slug)->firstOrFail();
        return view('dashboard.pages.partners.edit', compact('partner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PartnerUpdateRequest $request, $slug)
    {
        $partner = Partner::where('slug', $slug)->firstOrFail();
        $imagePath = null;
        $imageHelper = new ImageHelper();
        if ($request->hasFile('logo') && $request->file('logo')->isValid()) {
            $imagePath = $imageHelper->enregistrerImage($request->logo, 'images/partners/');
        }
        $partner->update([
            'name' => $request->nom,
            'logo' => $imagePath ? $imagePath : $partner->logo,
            'slug' => Str::slug($request->nom),
        ]);
        $admins = User::whereHas('roles', function ($query) {
            $query->where('name', 'admin');
        })->get();

        $message = "Un partenaire a été modifiée par ".Auth::user()->firstname.' '.Auth::user()->lastname;

        foreach ($admins as $admin) {
            Mail::to($admin->email)->send(new NotificationForAdmin($message));
        }
        toastr()->success('Action effectuée avec succès !');
        return redirect()->route('partners.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($slug)
    {
        $partner = Partner::where('slug', $slug)->firstOrFail();
        $partner->delete();
        $admins = User::whereHas('roles', function ($query) {
            $query->where('name', 'admin');
        })->get();

        $message = "Un partenaire a été supprimée par ".Auth::user()->firstname.' '.Auth::user()->lastname;

        foreach ($admins as $admin) {
            Mail::to($admin->email)->send(new NotificationForAdmin($message));
        }
        toastr()->success('Action effectuée avec succès !');
        return redirect()->route('partners.index');
    }
}
