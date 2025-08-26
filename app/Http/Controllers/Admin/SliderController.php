<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Slider\StoreSliderRequest;
use App\Http\Requests\Admin\Slider\UpdateSliderRequest;
use App\Models\Slider;
use Exception;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sliders = Slider::all();
        return view('admin.sliders.index', [
            'list' => $sliders
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.sliders.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSliderRequest $request)
    {
        $data = $request->validated();
        try {
            $model = Slider::create($data);

            if (request()->hasFile('image')) {
                $path = $request->file('image')->store('images/sliders');
                $model->image_path = $path;
                $model->save();
            }

            session()->flash("success", __("Created successfully!"));
            return redirect()->route('sliders.index');
        } catch (Exception $e) {
            session()->flash("error", $e->getMessage());
            return back();
        }
    }


    public function edit(Slider $slider)
    {
        return view('admin.sliders.edit', [
            'item' => $slider
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSliderRequest $request, Slider $slider)
    {
        $data = $request->validated();
        try {
            $slider->update($data);
            if (request()->hasFile('image')) {
                if ($slider->image_url) {
                    Storage::delete($slider->image_path);
                }
                $path = $request->file('image')->store('images/sliders');
                $slider->image_path = $path;
                $slider->save();
            }
            session()->flash("success", __("Updated successfully!"));
            return redirect()->route('sliders.index');
        } catch (Exception $e) {
            session()->flash("error", $e->getMessage());
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Slider $slider)
    {
        try {
            if ($slider->image_url) {
                Storage::delete($slider->image_path);
            }
            $slider->delete();

            session()->flash("success", __("Deleted successfully!"));
            return redirect()->route('sliders.index');
        } catch (Exception $e) {
            session()->flash("error", $e->getMessage());
            return redirect()->route('sliders.index');
        }
    }
}
