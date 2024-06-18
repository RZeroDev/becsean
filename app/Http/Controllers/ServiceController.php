<?php

namespace App\Http\Controllers;

use App\Helpers\ImageHelper;
use App\Http\Requests\ServiceStoreRequest;
use App\Http\Requests\ServiceUpdateRequest;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Helpers\FrontHelper;
use App\Helpers\BackHelper;
use App\Notifications\AdminActionNotification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use App\Models\Image;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::orderBy('created_at', 'desc')->paginate(10);
        return view('dashboard.pages.services.index',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.pages.services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ServiceStoreRequest $request)
    {
        $imageHelper = new ImageHelper();
        $imagePath = $imageHelper->enregistrerImage($request->main_image, 'images/services/');
        // dd('ggg');
        $service = Service::create([
            'title' => $request->title,
            'main_image' => FrontHelper::getEnvFolder() . $imagePath,
            'description' => $request->description,
            'slug' => Str::slug($request->title),
        ]);
        if ($request->hasFile('image_secondaire') && is_array($request->file('image_secondaire'))) {
            foreach ($request->file('image_secondaire') as $key => $image) {
                if ($image->isValid()) {
                    $imageSecondaire = $imageHelper->enregistrerImage($image, 'images/services/secondaire');
                    Image::create([
                        'url' => $imageSecondaire,
                        'service_id' => $service->id,
                    ]);
                }
            }
        }


        $text = "Un service a été ajouté par l'utilisateur " . Auth::user()->firstname . Auth::user()->lastname . ".";
        // Send notification to admins
        if(BackHelper::getAdminUsers())
            Notification::send(BackHelper::getAdminUsers(), new AdminActionNotification(BackHelper::getAdminEmails(), $text));

        toastr()->success('Action effectuée avec succès !');
        return redirect()->route('services.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        return view('dashboard.pages.services.show', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        return view('dashboard.pages.services.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ServiceUpdateRequest $request, Service $service)
    {
        $imagePath = null;
        $servicePath = null;
        $imageHelper = new ImageHelper();
        
        if ($request->hasFile('main_image') && $request->file('main_image')->isValid()) {
            $servicePath = $imageHelper->enregistrerImage($request->main_image, 'images/services');
            if($servicePath)
                $imageHelper->removeImage($service->image);
        }

        if ($request->hasFile('image_secondaire') && is_array($request->file('image_secondaire'))) {
            if ($service->images) {
                foreach($service->images as $image) {
                    $imageHelper->removeImage($image->url);
                    $image->delete();
                }
            }
            
            foreach ($request->file('image_secondaire') as $key => $image) {
                if ($image->isValid()) {
                    $imageSecondaire = $imageHelper->enregistrerImage($image, 'images/services/secondaire');
                    Image::create([
                        'url' => $imageSecondaire,
                        'service_id' => $service->id,
                    ]);
                }
            }
        }

        $service->update([
            'title' => $request->title,
            'main_image' => $servicePath ? FrontHelper::getEnvFolder() . $servicePath : $service->main_image,
            'description' => $request->description,
            'slug' => Str::slug($request->title),
        ]);



        $text = "Le service ayant pour titre '$service->title' a été modifiée par l'utilisateur " . Auth::user()->firstname . Auth::user()->lastname . ".";
        // Send notification to admins
        if(BackHelper::getAdminUsers())
            Notification::send(BackHelper::getAdminUsers(), new AdminActionNotification(BackHelper::getAdminEmails(), $text));

        toastr()->success('Action effectuée avec succès !');
        return redirect()->route('services.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        $imageHelper = new ImageHelper();

        $text = "Le service ayant pour titre '$service->title' a été supprimée par l'utilisateur " . Auth::user()->firstname . Auth::user()->lastname . ".";
        // Send notification to admins
        if(BackHelper::getAdminUsers())
            Notification::send(BackHelper::getAdminUsers(), new AdminActionNotification(BackHelper::getAdminEmails(), $text));

        if ($service->images) {
            foreach($service->images as $image) {
                $imageHelper->removeImage($image->url);
                $image->delete();
            }
        }

        if ($service->underservices) {
            foreach($service->underservices as $underservice) {
                $imageHelper->removeImage($underservice->image);
                $underservice->delete();
            }
        }

        if($service->main_image)
            $imageHelper->removeImage($service->main_image);

        $service->delete();
        
        toastr()->success('Action effectuée avec succès !');
        return redirect()->route('services.index');
    }
}
