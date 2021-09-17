<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Manager;
use App\Category;
use App\Location;

class ManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $managers = Manager::all();
        return view('managers.index', compact('managers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        $locations = Location::all();

        return view('managers.create', compact('categories', 'locations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $managers = new Manager();
        $managers->fio = $request->fio;
        $managers->phone = $request->phone;
        $managers->categoryId = $request->categoryId;
        $managers->locationId = $request->locationId;
        if ($request->img != null) {
            $imageName = "/uploads" . "/" . time() . '.' . $request->img->extension();

            $request->img->move(public_path('uploads/'), $imageName);
            $managers->img = $imageName;
        }
        $managers->save();

        return redirect('/manager/list');
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
        $managers = Manager::where('id', $id)->get();

        $categories = Category::all();

        $locations = Location::all();

        return view('managers.edit', compact('categories', 'locations', 'managers'));
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
        $managers = Manager::findOrFail($id);
        $managers->fio = $request->fio;
        $managers->phone = $request->phone;
        $managers->categoryId = $request->categoryId;
        $managers->locationId = $request->locationId;
        if ($request->img != null) {

            if (file_exists(public_path('') . $managers->img)) {
                unlink(public_path('') . $managers->img);
            }

            $imageName = "/uploads" . "/" . time() . '.' . $request->img->extension();

            $request->img->move(public_path('uploads/'), $imageName);
            $managers->img = $imageName;
        }
        $managers->save();

        return redirect('/manager/list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $managers = Manager::find($id);
        $managers->delete();

        return redirect('manager/list');
    }
}
