<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::orderBy('id', 'desc')->paginate(8);

        return view('product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required|string',
            'price' => 'required|string',
            'description' => 'required|string',
            'image_upload' => 'required|image|max:10240',
        ]);

        $path = $request->file('image_upload')->store('');

        Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'image_url' => env("AWS_BUCKET_URL") . "/{$path}",
        ]);

        return redirect("/");
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        request()->validate([
            'name' => 'required|string',
            'price' => 'required|string',
            'description' => 'required|string',
        ]);

        if ($request->hasFile('image_upload')) {
            $path = $request->file('image_upload')->store('');
            $filePath = explode('/', $product->image_url);
            $fileName = end($filePath);
            Storage::delete($fileName);
            $product->update([
                'name' => $request->name,
                'price' => $request->price,
                'description' => $request->description,
                'image_url' => env("AWS_BUCKET_URL") . "/{$path}",
            ]);
        } else {
            $product->update([
                'name' => $request->name,
                'price' => $request->price,
                'description' => $request->description,
            ]);
        }
        return redirect("/");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $filePath = explode('/', $product->image_url);
        $fileName = end($filePath);
        Storage::delete($fileName);
        $product->delete();
        return redirect("/");
    }
}
