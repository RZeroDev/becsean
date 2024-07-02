<?php

namespace App\Http\Controllers;

use App\Helpers\ImageHelper;
use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galeries=Image::where('service_id',null)
        ->where('actuality_id',null)
        ->where('project_id',null)
        ->where('product_id',null)
        ->paginate(10);
        return view('dashboard.pages.galeries.index',compact('galeries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.pages.galeries.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(([
            
            'galerie.*'=>'required|image',
            
            //'id_evenement[]'=>'required|string'
        ]));
        $imageHelper = new ImageHelper();
        // dd('ggg');
        
        if ($request->hasFile('galerie') && is_array($request->file('galerie'))) {
            foreach ($request->file('galerie') as $key => $image) {
                if ($image->isValid()) {
                    $galerie = $imageHelper->enregistrerImage($image, 'images/galeries');
                    Image::create([
                        'url' => $galerie,
                    ]);
                }
            }
        }


       
        toastr()->success('Action effectuée avec succès !');
        return redirect()->route('galeries.index');
    }


    /**
     * Display the specified resource.
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Image $image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Image $image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $imageHelper = new ImageHelper();
        $galerie = Image::where('id',$id)->first();
        $galerie->delete();

        

       
       
        
        toastr()->success('Action effectuée avec succès !');
        return redirect()->route('galeries.index');
    }
}
