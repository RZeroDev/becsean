<?php

namespace App\Http\Controllers;

use App\Models\SectionStatus;
use Illuminate\Http\Request;

class SectionStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sectionStatus = SectionStatus::first();
        return view('dashboard.pages.home.sections.edit',compact('sectionStatus'));
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
    public function show(SectionStatus $sectionStatus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SectionStatus $sectionStatus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SectionStatus $sectionStatus)
    {
        $sectionStatus->update($request->all());
        toastr()->success('Action effectuée avec succès !');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SectionStatus $sectionStatus)
    {
        //
    }
}
