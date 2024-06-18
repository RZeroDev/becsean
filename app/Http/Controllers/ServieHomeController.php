<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServiceHomeUpdateRequest;
use App\Models\ServieHome;
use Illuminate\Http\Request;

class ServieHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $servieHome = ServieHome::first();
        return view('dashboard.pages.home.services.edit', compact('servieHome'));
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
        
    }

    /**
     * Display the specified resource.
     */
    public function show($servieHome)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ServieHome $servieHome)
    {
        $servieHome = ServieHome::first();
        return view('dashboard.pages.home.services.edit', compact('servieHome'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ServiceHomeUpdateRequest $request, ServieHome $servieHome)
    {
        $servieHome->update([
            'title' => $request->title,
            'secondTitle' => $request->secondTitle,
            'actiontext' => $request->actionText,
        ]);
        toastr()->success('Action effectuée avec succès !');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ServieHome $servieHome)
    {
        //
    }
}
