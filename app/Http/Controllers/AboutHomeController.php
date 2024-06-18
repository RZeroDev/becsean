<?php

namespace App\Http\Controllers;

use App\Helpers\ImageHelper;
use App\Http\Requests\AboutHomeUpdateRequest;
use App\Models\AboutHome;
use Illuminate\Http\Request;

class AboutHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aboutHome = AboutHome::first();
        return view('dashboard.pages.home.about.edit',compact('aboutHome'));
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
    public function show(AboutHome $aboutHome)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AboutHome $aboutHome)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AboutHomeUpdateRequest $request, AboutHome $aboutHome)
    {
        $imagePath = null;
        $image1Path = null;
        $imageHelper = new ImageHelper();
        if ($request->hasFile('image1') && $request->file('image1')->isValid()) {
            $imagePath = $imageHelper->enregistrerImage($request->image1, 'images/abouts');
        }
        if ($request->hasFile('image2') && $request->file('image2')->isValid()) {
            $image1Path = $imageHelper->enregistrerImage($request->image2, 'images/abouts');
        }
        // dd($image1Path);

        $aboutHome->update([
            'title' => $request->title,
            'secondTitle' => $request->secondTitle,
            'firstDescription' => $request->description1,
            'secondDescription' => $request->description2,
            'actionText' => $request->actionText,
            'image' => $imagePath ? $imagePath : $aboutHome->image,
            'shape' => $image1Path ? $image1Path : $aboutHome->shape,
        ]);
        toastr()->success('Action effectuée avec succès !');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AboutHome $aboutHome)
    {
        //
    }
}
