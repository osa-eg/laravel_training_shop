<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Product\StoreProductRequest;
use App\Http\Requests\Admin\Product\UpdateProductRequest;
use App\Models\Category;
use App\Models\Product;
use Exception;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::with('category')->get();
        return view('admin.products.index', [
            'list' => $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::select('id','name')->get();
        return view('admin.products.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $data = $request->validated();
        try {
            $model = Product::create($data);

            if (request()->hasFile('image')) {
                $path = $request->file('image')->store('images/products');
                $model->image_path = $path;
                $model->save();
            }

            session()->flash("success", __("Created successfully!"));
            return redirect()->route('products.index');
        } catch (Exception $e) {
            session()->flash("error", $e->getMessage());
            return back();
        }
    }


    public function edit(Product $product)
    {
        return view('admin.products.edit', [
            'item' => $product
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        $data = $request->validated();
        try {
            $product->update($data);
            if (request()->hasFile('image')) {
                if ($product->image_url) {
                    Storage::delete($product->image_path);
                }
                $path = $request->file('image')->store('images/products');
                $product->image_path = $path;
                $product->save();
            }
            session()->flash("success", __("Updated successfully!"));
            return redirect()->route('products.index');
        } catch (Exception $e) {
            session()->flash("error", $e->getMessage());
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        try {
            if ($product->image_url) {
                Storage::delete($product->image_path);
            }
            $product->delete();

            session()->flash("success", __("Deleted successfully!"));
            return redirect()->route('products.index');
        } catch (Exception $e) {
            session()->flash("error", $e->getMessage());
            return redirect()->route('products.index');
        }
    }
}
