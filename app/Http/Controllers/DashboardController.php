<?php

namespace App\Http\Controllers;

use App\Helpers\FrontHelper;
use App\Helpers\ImageHelper;
use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use App\Models\Service;
use App\Models\Partner;
use App\Models\Testimonial;
use App\Models\Actuality;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function update1(ProfileUpdateRequest $request, User $user)
    {
        $imagePath = null;
        $imageHelper = new ImageHelper();
        if ($request->hasFile('avatar') && $request->file('avatar')->isValid()) {
            $imagePath = $imageHelper->enregistrerImage($request->avatar, 'images/avatars/');
        }

        $user->update([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'phone' => $request->phone,
            'email' => $request->email,
            'avatar' => $imagePath ? $imagePath : $user->avatar,
        ]);

        toastr()->success('Action effectuée avec succès !');
        return redirect()->back();
    }

    public function index()
    {
        $nbrActuality = count(Actuality::all());
        $nbrService = count(Service::all());
        $nbrPartner = count(Partner::all());
        $nbrUser = count(User::all());
        $nbrTestimonial = count(Testimonial::all());

        $actualities = Actuality::latest()->take(3)->get();;
        $services = Service::latest()->take(3)->get();;
        $partners = Partner::latest()->take(3)->get();;
        $testimonials = Testimonial::latest()->take(3)->get();;
        return view('dashboard.pages.index', compact('nbrPartner', 'nbrUser', 'nbrService', 'nbrActuality', 'nbrTestimonial', 'actualities', 'services', 'partners', 'testimonials'));
    }
}
