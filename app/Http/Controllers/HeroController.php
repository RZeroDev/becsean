<?php

namespace App\Http\Controllers;

use App\Helpers\ImageHelper;
use App\Http\Requests\HeroUpdateRequest;
use App\Models\Hero;
use Illuminate\Http\Request;

class HeroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hero = Hero::first();
        return view('dashboard.pages.home.heros.edit', compact('hero'));
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
    public function show(Hero $hero)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hero $hero)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(HeroUpdateRequest $request, Hero $hero)
    {
        $imagePath = null;
        $videoPath = null;
        $imageHelper = new ImageHelper();
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $imagePath = $imageHelper->enregistrerImage($request->image, 'images/heros');
        }
        if ($request->hasFile('video') && $request->file('video')->isValid()) {
            $videoPath = $imageHelper->enregistrerImage($request->video, 'videos/heros');
        }
        // dd($videoPath);

        $hero->update([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imagePath ? $imagePath : $hero->image,
            'video' => $videoPath ? $videoPath : $hero->video,
        ]);
        toastr()->success('Action effectuée avec succès !');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hero $hero)
    {
        //
    }
}
