<?php

namespace App\Http\Controllers;

use App\Http\Requests\WorkAreaUpdateRequest;
use App\Models\WorkArea;
use Illuminate\Http\Request;

class WorkAreaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $workAreas = WorkArea::all();
        return view('dashboard.pages.home.workArea.index',compact('workAreas'));
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
    public function show(WorkArea $workArea)
    {
        return view('dashboard.pages.home.workArea.show',compact('workArea'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(WorkArea $workArea)
    {
        return view('dashboard.pages.home.workArea.edit',compact('workArea'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(WorkAreaUpdateRequest $request, WorkArea $workArea)
    {
        $workArea->update([
            'title'=>$request->title,
            'number'=>$request->number,
            'description'=>$request->description,
        ]);
        toastr()->success('Action effectuée avec succès !');
        return redirect()->route('workAreas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(WorkArea $workArea)
    {
        //
    }
}
