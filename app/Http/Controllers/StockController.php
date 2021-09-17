<?php

namespace App\Http\Controllers;

use App\Location;
use App\Stock;
use Illuminate\Http\Request;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stocks = Stock::paginate(10);

        return view('stock.index', compact('stocks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $locations = Location::all();

        return view('stock.create', compact('locations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $stock = new Stock();
        $stock->title = $request->title;
        $stock->caption = $request->caption;
        $stock->location_id = $request->location_id;
        $stock->type = $request->type;
        if ($request->img != null) {

            $imageName = "/uploads" . "/" . time() . '.' . $request->img->extension();

            $request->img->move(public_path('uploads/'), $imageName);
            $stock->img = $imageName;
        }
        $stock->save();

        return redirect('/stock/list');
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
        $stocks = Stock::where('id', $id)->get();

        $locations = Location::all();

        return view('stock.edit', compact('stocks', 'locations'));
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
        $stock = Stock::findOrFail($id);
        $stock->title = $request->title;
        $stock->caption = $request->caption;
        $stock->location_id = $request->location_id;
        $stock->type = $request->type;
        if ($request->img != null) {

            if (file_exists(public_path('') . $stock->img)) {
                unlink(public_path('') . $stock->img);
            }

            $imageName = "/uploads" . "/" . time() . '.' . $request->img->extension();

            $request->img->move(public_path('uploads/'), $imageName);
            $stock->img = $imageName;
        }
        $stock->save();

        return redirect('/stock/list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $managers = Stock::find($id);
        $managers->delete();

        return redirect('/stock/list');
    }
}
