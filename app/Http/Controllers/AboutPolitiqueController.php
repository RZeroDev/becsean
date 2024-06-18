<?php

namespace App\Http\Controllers;

use App\Http\Requests\AboutPolitiqueUpdateRequest;
use App\Models\AboutPolitique;
use Illuminate\Http\Request;

class AboutPolitiqueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aboutPolitique = AboutPolitique::first();
        return view('dashboard.pages.about.edit',compact('aboutPolitique'));
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
    public function show(AboutPolitique $aboutPolitique)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AboutPolitique $aboutPolitique)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AboutPolitiqueUpdateRequest $request, AboutPolitique $aboutPolitique)
    {
        $aboutPolitique->update($request->all());
        toastr()->success('Action effectuée avec succès !');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AboutPolitique $aboutPolitique)
    {
        //
    }
}
