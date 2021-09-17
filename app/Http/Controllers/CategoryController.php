<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;
use App\LocationPhoto;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locations = Location::all();
        $photos = LocationPhoto::all();
        return view('departments.index', compact('locations', 'photos'));
    }

    public function editPhoto($id)
    {
        $photos = LocationPhoto::where('id', $id)->get();

        return view('departments.catPhotoAdd', compact('photos'));
    }

    public function updatePhoto(Request $request, $id)
    {
        $photo = LocationPhoto::findOrFail($id);
        if ($request->image != null) {

            if (file_exists(public_path('') . $photo->img)) {
                unlink(public_path('') . $photo->img);
            }

            $imageName = "/uploads" . "/" . time() . '.' . $request->image->extension();

            $request->image->move(public_path('uploads/'), $imageName);
            $photo->img = $imageName;
        }
        $photo->save();

        return redirect('product/list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('departments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $locations = new Location();
        $locations->title = $request->location;
        $locations->save();

        return redirect('product/list');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $locations = Location::where('id', $id)->get();
        return view('departments.departmentsEdit', compact('locations'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $location = Location::findOrFail($id);
        $location->title = $request->location;
        $location->save();

        return redirect('product/list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $location = Location::find($id);
        $location->delete();

        return redirect('product/list');
    }
}
