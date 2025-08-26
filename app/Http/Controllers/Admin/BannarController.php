<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Bannar\StoreBannarRequest;
use App\Http\Requests\Admin\Bannar\UpdateBannarRequest;
use App\Models\Bannar;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BannarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bannars = Bannar::all();
        return view('admin.bannars.index', [
            'list' => $bannars
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.bannars.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBannarRequest $request)
    {
        $data = $request->validated();
        try {
            $model = Bannar::create($data);

            if (request()->hasFile('image')) {
                $path = $request->file('image')->store('images/bannars');
                $model->image_path = $path;
                $model->save();
            }

            session()->flash("success", __("Created successfully!"));
            return redirect()->route('bannars.index');
        } catch (Exception $e) {
            session()->flash("error", $e->getMessage());
            return back();
        }
    }


    public function edit(Bannar $bannar)
    {
        return view('admin.bannars.edit', [
            'item' => $bannar
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBannarRequest $request, Bannar $bannar)
    {
        $data = $request->validated();
        try {
            $bannar->update($data);
            if (request()->hasFile('image')) {
                if ($bannar->image_url) {
                    Storage::delete($bannar->image_path);
                }
                $path = $request->file('image')->store('images/bannars');
                $bannar->image_path = $path;
                $bannar->save();
            }
            session()->flash("success", __("Updated successfully!"));
            return redirect()->route('bannars.index');
        } catch (Exception $e) {
            session()->flash("error", $e->getMessage());
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bannar $bannar)
    {
        try {
            if ($bannar->image_url) {
                Storage::delete($bannar->image_path);
            }
            $bannar->delete();

            session()->flash("success", __("Deleted successfully!"));
            return redirect()->route('bannars.index');
        } catch (Exception $e) {
            session()->flash("error", $e->getMessage());
            return redirect()->route('bannars.index');
        }
    }
}
