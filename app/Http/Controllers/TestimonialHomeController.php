<?php

namespace App\Http\Controllers;

use App\Http\Requests\TestimonialHomeUpdateRequest;
use App\Http\Requests\TestimonialUpdateRequest;
use App\Models\TestimonialHome;
use Illuminate\Http\Request;

class TestimonialHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonialHome = TestimonialHome::first();
        // dd($testimonialHome);
        return view('dashboard.pages.home.testimonials.edit', compact('testimonialHome'));
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
    public function show(TestimonialHome $testimonialHome)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TestimonialHome $testimonialHome)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TestimonialHomeUpdateRequest $request, TestimonialHome $testimonialHome)
    {
        $testimonialHome->update([
            'title' => $request->title
        ]);
        toastr()->success('Action effectuée avec succès !');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TestimonialHome $testimonialHome)
    {
        //
    }
}
