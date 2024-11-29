<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::latest()->paginate(5);
        return view('admin.products.products-table',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {

        $data = $request->validated();

        //image uploading

        $image = $request->image;

        $newImageName = time() . '-' . $image->getClientOriginalName();

        $image->storeAs('uploads', $newImageName, 'public');

        $data['image'] = $newImageName;

        $product = [
            'name' => [
                'ar' => $data['name-ar'],
                'en' => $data['name-en']
            ],
            'description' => [
                'ar' => $data['description-ar'],
                'en' => $data['description-en']
            ],
            'image' => $data['image']
        ];

        Product::create($product);
        return to_route('admin.products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {

        return view('admin.products.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreProductRequest $request, Product $product)
    {
        $data = $request->validated();
        //image uploading

        if ($request->hasFile('image')) {
            storage::delete("public/uploads/$product->image");

            $image = $request->image;

            $newImageName = time() . '-' . $image->getClientOriginalName();

            $image->storeAs('uploads', $newImageName, 'public');

            $data['image'] = $newImageName;
        }

        $productUpdated = [
            'name' => [
                'ar' => $data['name-ar'],
                'en' => $data['name-en']
            ],
            'description' => [
                'ar' => $data['description-ar'],
                'en' => $data['description-en']
            ],
            'image' => $data['image']
        ];

        $product->update($productUpdated);

        return to_route('admin.products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        if(auth()->check()){
            storage::delete("public/uploads/$product->image");
            $product->delete();
            return to_route('admin.products.index');
        }
    }
}
