<?php

namespace App\Http\Controllers;

use App\Http\Requests\ActualityPageUpdateRequest;
use App\Models\ActualitiesPage;
use App\Models\Actuality;
use Illuminate\Http\Request;

class ActualitiesPageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $actualities = Actuality::orderBy('created_at', 'desc')->paginate(10);
        return view('dashboard.pages.actualitiesPages.index', compact('actualities'));
    }
    public function index1()
    {
        $actualitiesPage = ActualitiesPage::first();
        return view('dashboard.pages.actualitiesPages.edit', compact('actualitiesPage'));
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
    public function show(ActualitiesPage $actualitiesPage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ActualitiesPage $actualitiesPage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ActualityPageUpdateRequest $request, ActualitiesPage $actualitiesPage)
    {
        $actualitiesPage->update([
            'title' => $request->title
        ]);
        toastr()->success('Action effectuée avec succès !');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ActualitiesPage $actualitiesPage)
    {
        //
    }
}
