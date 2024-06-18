<?php

namespace App\Http\Controllers;

use App\Models\Email;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Helpers\BackHelper;
use App\Notifications\AdminActionNotification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;

class EmailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $emails = Email::paginate(10);
        return view('dashboard.pages.emails.index', compact('emails'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.pages.emails.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'email', 'unique:emails,name'],
        ]);
        Email::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
        ]);
        $text = "Un email a été ajouté par l'utilisateur " . Auth::user()->firstname . Auth::user()->lastname . ".";
        // Send notification to admins
        if (BackHelper::getAdminUsers())
            Notification::send(BackHelper::getAdminUsers(), new AdminActionNotification(BackHelper::getAdminEmails(), $text));

        toastr()->success('Action effectuée avec succès !');
        return redirect()->route('emails.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Email $email)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Email $email)
    {
        return view('dashboard.pages.emails.edit', compact('email'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Email $email)
    {
        $request->validate([
            'name' => ['required', 'email'],
        ]);
        $email->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
        ]);

        $text = "Cet Email '$email->name' a été modifiée par l'utilisateur " . Auth::user()->firstname . Auth::user()->lastname . ".";
        // Send notification to admins
        if (BackHelper::getAdminUsers())
            Notification::send(BackHelper::getAdminUsers(), new AdminActionNotification(BackHelper::getAdminEmails(), $text));

        toastr()->success('Action effectuée avec succès !');
        return redirect()->route('emails.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Email $email)
    {
        $text = "Le mail '$email->name' a été supprimée par l'utilisateur " . Auth::user()->firstname . Auth::user()->lastname . ".";
        // Send notification to admins
        if (BackHelper::getAdminUsers())
            Notification::send(BackHelper::getAdminUsers(), new AdminActionNotification(BackHelper::getAdminEmails(), $text));
        $email->delete();
        toastr()->success('Action effectuée avec succès !');
        return redirect()->route('emails.index');
    }
}
