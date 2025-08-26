<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\StoreCategoryRequest;
use App\Http\Requests\Admin\Category\UpdateCategoryRequest;
use App\Models\Category;
use Exception;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index', [
            'list' => $categories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        $data = $request->validated();
        try {
            $model = Category::create($data);

            if (request()->hasFile('image')) {
                $path = $request->file('image')->store('images/categories');
                $model->image_path = $path;
                $model->save();
            }

            session()->flash("success", __("Created successfully!"));
            return redirect()->route('categories.index');
        } catch (Exception $e) {
            session()->flash("error", $e->getMessage());
            return back();
        }
    }


    public function edit(Category $category)
    {
        return view('admin.categories.edit', [
            'item' => $category
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $data = $request->validated();
        try {
            $category->update($data);
            if (request()->hasFile('image')) {
                if ($category->image_url) {
                    Storage::delete($category->image_path);
                }
                $path = $request->file('image')->store('images/categories');
                $category->image_path = $path;
                $category->save();
            }
            session()->flash("success", __("Updated successfully!"));
            return redirect()->route('categories.index');
        } catch (Exception $e) {
            session()->flash("error", $e->getMessage());
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        try {
            if ($category->image_url) {
                Storage::delete($category->image_path);
            }
            $category->delete();

            session()->flash("success", __("Deleted successfully!"));
            return redirect()->route('categories.index');
        } catch (Exception $e) {
            session()->flash("error", $e->getMessage());
            return redirect()->route('categories.index');
        }
    }
}
