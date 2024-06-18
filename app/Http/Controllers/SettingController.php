<?php

namespace App\Http\Controllers;

use App\Http\Requests\SettingUpdateRequest;
use App\Mail\NotificationForAdmin;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $setting = Setting::first();
        return view('dashboard.pages.settings.edit', compact('setting'));
    }

    public function analytics_update(Request $request, Setting $setting)
    {

        $setting->update([
            'analytics' => $request->analytics,
        ]);
        $message = "les paramètre ont étés modifiée par " . Auth::user()->firstname . ' ' . Auth::user()->lastname;
        $admins = User::whereHas('roles', function ($query) {
            $query->where('name', 'admin');
        })->get();
        // dd($setting);
        foreach ($admins as $admin) {
            Mail::to($admin->email)->send(new NotificationForAdmin($message));
        }
        toastr()->success('Action effectuée avec succès !');
        return redirect()->back();
    }
    public function analytics()
    {
        $setting = Setting::first();
        return view('dashboard.pages.settings.analytics', compact('setting'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Setting $setting)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SettingUpdateRequest $request, Setting $setting)
    {
        $setting = Setting::first();
        // dd($setting);
        $setting->update([
            'company_name' => $request->company_name,
            'company_phone' => $request->company_phone,
            'company_email' => $request->company_email,
            'company_facebook' => $request->company_facebook,
            'company_instagram' => $request->company_instagram,
            'company_youtube' => $request->company_youtube,
            'company_twitter' => $request->company_twitter,
            'company_linkedin' => $request->company_linkedin,
            'company_tiktok' => $request->company_tiktok,
            'analytics' => $request->analytics,
            'company_headquarters' => $request->company_headquarters,
        ]);

        $message = "les paramètre ont étés modifiée par " . Auth::user()->firstname . ' ' . Auth::user()->lastname;
        $admins = User::whereHas('roles', function ($query) {
            $query->where('name', 'admin');
        })->get();
        foreach ($admins as $admin) {
            Mail::to($admin->email)->send(new NotificationForAdmin($message));
        }
        toastr()->success('Action effectuée avec succès !');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Setting $setting)
    {
        //
    }
}
