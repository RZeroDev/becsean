<?php

namespace App\Http\Controllers;

use App\Models\UnderService;
use App\Http\Requests\UnderServiceStoreRequest;
use App\Http\Requests\UnderServiceUpdateRequest;
use Illuminate\Http\Request;
use App\Helpers\ImageHelper;
use Illuminate\Support\Str;
use App\Helpers\FrontHelper;
use App\Helpers\BackHelper;
use App\Notifications\AdminActionNotification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;

class UnderServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(UnderServiceStoreRequest $request)
    {
        $imageHelper = new ImageHelper();
        $imagePath = $imageHelper->enregistrerImage($request->image, 'images/underservices/');
        // dd('ggg');
        $underservice = UnderService::create([
            'title' => $request->title,
            'service_id' => $request->service,
            'image' => FrontHelper::getEnvFolder() . $imagePath,
            'description' => $request->description,
            'slug' => Str::slug($request->title),
        ]);

        $text = "Un sous service a été ajouté par l'utilisateur " . Auth::user()->firstname . Auth::user()->lastname . ".";
        // Send notification to admins
        if(BackHelper::getAdminUsers())
            Notification::send(BackHelper::getAdminUsers(), new AdminActionNotification(BackHelper::getAdminEmails(), $text));

        toastr()->success('Action effectuée avec succès !');
        return Redirect::to(URL::previous() . "#underservices");
    }

    /**
     * Display the specified resource.
     */
    public function show(UnderService $underService)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UnderService $underService)
    {
        return view('dashboard.pages.services.underservices.edit', compact('underService'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UnderServiceUpdateRequest $request, UnderService $underService)
    {
        $imagePath = null;
        $underservicePath = null;
        $imageHelper = new ImageHelper();
        
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $underservicePath = $imageHelper->enregistrerImage($request->image, 'images/underservices');
            if($underservicePath)
                $imageHelper->removeImage($underService->image);
        }
        $underService->update([
            'title' => $request->title,
            'image' => $underservicePath ? FrontHelper::getEnvFolder() . $underservicePath : $underService->image,
            'description' => $request->description,
            'slug' => Str::slug($request->title),
        ]);

        $text = "Le sous service ayant pour titre '$underService->title' a été modifiée par l'utilisateur " . Auth::user()->firstname . Auth::user()->lastname . ".";
        // Send notification to admins
        if(BackHelper::getAdminUsers())
            Notification::send(BackHelper::getAdminUsers(), new AdminActionNotification(BackHelper::getAdminEmails(), $text));

        toastr()->success('Action effectuée avec succès !');
        return redirect()->route('services.show', $underService->service);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UnderService $underService)
    {
        $imageHelper = new ImageHelper();

        $text = "Le sous service ayant pour titre '$underService->title' a été supprimée par l'utilisateur " . Auth::user()->firstname . Auth::user()->lastname . ".";
        // Send notification to admins
        if(BackHelper::getAdminUsers())
            Notification::send(BackHelper::getAdminUsers(), new AdminActionNotification(BackHelper::getAdminEmails(), $text));

        

        if($underService->image)
            $imageHelper->removeImage($underService->image);

        $underService->delete();
        
        toastr()->success('Action effectuée avec succès !');
        return Redirect::to(URL::previous() . "#underservices");
    }
}
