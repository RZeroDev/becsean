<?php

namespace App\Http\Controllers;

use App\Models\Seo;
use Illuminate\Http\Request;

class SeoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $seos = Seo::orderBy('page')->paginate(20);
        // dd($seos);
        return view('dashboard.pages.seos.index', compact('seos'));
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
    public function show(Seo $seo)
    {
        return view('dashboard.pages.seos.show', compact('seo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Seo $seo)
    {
        return view('dashboard.pages.seos.edit', compact('seo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Seo $seo)
    {
        $seo->update([
            'keywords' => $request->keywords,
            'description' => $request->description,
        ]);
        toastr()->success('Action effectuée avec succès !');
        return redirect()->route('seos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Seo $seo)
    {
        //
    }
}
