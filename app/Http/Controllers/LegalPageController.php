<?php

namespace App\Http\Controllers;

use App\Http\Requests\legalPageUpdateRequest;
use App\Models\legalPage;
use Illuminate\Http\Request;

class LegalPageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $legalPage = legalPage::first();
        return view('dashboard.pages.legalPages.edit',compact('legalPage'));
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
    public function show(legalPage $legalPage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(legalPage $legalPage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(legalPageUpdateRequest $request, legalPage $legalPage)
    {
        $legalPage->update([
            'description'=>$request->description
        ]);
        toastr()->success('Action effectuée avec succès !');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(legalPage $legalPage)
    {
        //
    }
}
