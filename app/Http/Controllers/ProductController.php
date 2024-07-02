<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Product;
use Illuminate\Support\Str;
use App\Helpers\FrontHelper;
use App\Helpers\ImageHelper;
use Illuminate\Http\Request;
use App\Models\ProductCategorie;
use App\Http\Requests\ProductStoreRequest;
use App\Http\Requests\ProductUpdateRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::orderBy('created_at', 'desc')->paginate(10);
        return view('dashboard.pages.products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {  
        $category=ProductCategorie::orderBy('name','asc')->get();
        return view('dashboard.pages.products.create',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductStoreRequest $request)
    {
        $imageHelper = new ImageHelper();
        $imagePath = $imageHelper->enregistrerImage($request->main_image, 'images/products/');
        // dd('ggg');
        $product = Product::create([
            'title' => $request->title,
            'main_image' => FrontHelper::getEnvFolder() . $imagePath,
            'description' => $request->description,
            'slug' => Str::slug($request->title),
            'product_categorie_id'=>$request->product_categorie,
        ]);
        if ($request->hasFile('image_secondaire') && is_array($request->file('image_secondaire'))) {
            foreach ($request->file('image_secondaire') as $key => $image) {
                if ($image->isValid()) {
                    $imageSecondaire = $imageHelper->enregistrerImage($image, 'images/products/secondaire');
                    Image::create([
                        'url' => $imageSecondaire,
                        'product_id' => $product->id,
                    ]);
                }
            }
        }

        toastr()->success('Action effectuée avec succès !');
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('dashboard.pages.products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {   $category=ProductCategorie::orderBy('name','asc')->get();
        return view('dashboard.pages.products.edit', compact('product','category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductUpdateRequest $request, Product $product)
    {
        $imagePath = null;
        $productPath = null;
        $imageHelper = new ImageHelper();

        if ($request->hasFile('main_image') && $request->file('main_image')->isValid()) {
            $productPath = $imageHelper->enregistrerImage($request->main_image, 'images/products');
            if($productPath)
                $imageHelper->removeImage($product->image);
        }

        if ($request->hasFile('image_secondaire') && is_array($request->file('image_secondaire'))) {
            if ($product->images) {
                foreach($product->images as $image) {
                    $imageHelper->removeImage($image->url);
                    $image->delete();
                }
            }

            foreach ($request->file('image_secondaire') as $key => $image) {
                if ($image->isValid()) {
                    $imageSecondaire = $imageHelper->enregistrerImage($image, 'images/products/secondaire');
                    Image::create([
                        'url' => $imageSecondaire,
                        'product_id' => $product->id,
                    ]);
                }
            }
        }

        $product->update([
            'title' => $request->title,
            'main_image' => $productPath ? FrontHelper::getEnvFolder() . $productPath : $product->main_image,
            'description' => $request->description,
            'slug' => Str::slug($request->title),
            'product_categorie_id'=>$request->product_categorie,
        ]);

        toastr()->success('Action effectuée avec succès !');
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $imageHelper = new ImageHelper();

        if ($product->images) {
            foreach($product->images as $image) {
                $imageHelper->removeImage($image->url);
                $image->delete();
            }
        }

        if($product->main_image)
            $imageHelper->removeImage($product->main_image);

        $product->delete();

        toastr()->success('Action effectuée avec succès !');
        return redirect()->route('products.index');
    }
}
