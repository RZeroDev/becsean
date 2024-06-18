<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Helpers\BackHelper;
use App\Notifications\AdminActionNotification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;

class PhoneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $phones = Phone::paginate(10);
        return view('dashboard.pages.phones.index', compact('phones'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.pages.phones.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'unique:phones,name'],
        ]);
        Phone::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
        ]);
        $text = "Un numéro de téléphone a été ajouté par l'utilisateur " . Auth::user()->firstname . Auth::user()->lastname . ".";
        // Send notification to admins
        if (BackHelper::getAdminUsers())
            Notification::send(BackHelper::getAdminUsers(), new AdminActionNotification(BackHelper::getAdminEmails(), $text));

        toastr()->success('Action effectuée avec succès !');

        return redirect()->route('phones.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Phone $phone)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Phone $phone)
    {
        return view('dashboard.pages.phones.edit', compact('phone'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Phone $phone)
    {
        $request->validate([
            'name' => ['required'],
        ]);
        $phone->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
        ]);

        $text = "Ce numéro de téléphone phone '$phone->name' a été modifiée par l'utilisateur " . Auth::user()->firstname . Auth::user()->lastname . ".";
        // Send notification to admins
        if (BackHelper::getAdminUsers())
            Notification::send(BackHelper::getAdminUsers(), new AdminActionNotification(BackHelper::getAdminEmails(), $text));

        toastr()->success('Action effectuée avec succès !');

        return redirect()->route('phones.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Phone $phone)
    {
        $text = "Le numéro de téléphone '$phone->name' a été supprimée par l'utilisateur " . Auth::user()->firstname . Auth::user()->lastname . ".";
        // Send notification to admins
        if (BackHelper::getAdminUsers())
            Notification::send(BackHelper::getAdminUsers(), new AdminActionNotification(BackHelper::getAdminEmails(), $text));
        $phone->delete();
        $message = 'Action éffectuer ';
        return redirect()->route('phones.index');
    }
}
