<?php

namespace App\Http\Controllers;

use App\Http\Requests\DescriptionFooterUpdateRequest;
use App\Models\DescriptionFooter;
use Illuminate\Http\Request;

class DescriptionFooterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $descriptionFooter = DescriptionFooter::first();
        return view('dashboard.pages.home.footer.edit',compact('descriptionFooter'));
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
    public function show(DescriptionFooter $descriptionFooter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DescriptionFooter $descriptionFooter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DescriptionFooterUpdateRequest $request, DescriptionFooter $descriptionFooter)
    {
        $descriptionFooter->update($request->all());
        toastr()->success('Action effectuée avec succès !');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DescriptionFooter $descriptionFooter)
    {
        //
    }
}
