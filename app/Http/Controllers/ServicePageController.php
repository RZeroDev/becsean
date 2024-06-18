<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServicePageUpdateRequest;
use App\Models\Service;
use App\Models\ServicePage;
use Illuminate\Http\Request;

class ServicePageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::orderBy('created_at','desc')->paginate(10);
        return view('dashboard.pages.ServicesPages.index',compact('services'));
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
    public function show(ServicePage $servicePage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function index1()
    {
        $servicePage = ServicePage::first();
        return view('dashboard.pages.ServicesPages.edit',compact('servicePage'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ServicePageUpdateRequest $request, ServicePage $servicePage)
    {
        $servicePage->update([
            'title'=>$request->title,
            'secondTitle'=>$request->secondTitle,
        ]);
        toastr()->success('Action effectuée avec succès !');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ServicePage $servicePage)
    {
        //
    }
}
