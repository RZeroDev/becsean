<?php

namespace App\Http\Controllers;

use App\Helpers\ImageHelper;
use App\Http\Requests\AuthorSectionUpdateRequeste;
use App\Models\AuthorSection;
use Illuminate\Http\Request;

class AuthorSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $authorSection = AuthorSection::first();
        return view('dashboard.pages.home.author.edit',compact('authorSection'));
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
    public function show(AuthorSection $authorSection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AuthorSection $authorSection)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AuthorSectionUpdateRequeste $request, AuthorSection $authorSection)
    {
        $imagePath = null;
        $image1Path = null;
        $imageHelper = new ImageHelper();
        if ($request->hasFile('image1') && $request->file('image1')->isValid()) {
            $imagePath = $imageHelper->enregistrerImage($request->image1, 'images/author');
        }
        if ($request->hasFile('image2') && $request->file('image2')->isValid()) {
            $image1Path = $imageHelper->enregistrerImage($request->image2, 'images/author');
        }
        // dd($image1Path);

        $authorSection->update([
            'title' => $request->title,
            'description' => $request->description,
            'actionUrl' => $request->actionUrl,
            'actionText' => $request->actionText,
            'image' => $imagePath ? $imagePath : $authorSection->image,
            'shape' => $image1Path ? $image1Path : $authorSection->shape,
        ]);
        toastr()->success('Action effectuée avec succès !');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AuthorSection $authorSection)
    {
        //
    }
}
