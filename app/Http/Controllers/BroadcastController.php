<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

class BroadcastController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $broadcasts = Message::paginate(20);

        return view('broadcasting.index', compact('broadcasts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('broadcasting.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = new Message();
        $messages->title = $request->title;
        if ($request->image != null) {
            $imageName = asset("/uploads" . "/" . time() . '.' . $request->image->extension());

            $request->image->move(public_path('uploads/'), $imageName);
            $messages->image = $imageName;
        }
        $messages->save();

        return redirect('/broadcast/list');
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
        $messages = Message::where('id', $id)->get();

        return view('broadcasting.edit', compact('messages'));
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
        $messages = Message::findOrFail($id);
        $messages->title = $request->title;
        if ($request->image != null) {

            if (file_exists(public_path('') . substr($messages->image, 21))) {
                unlink(public_path('') . substr($messages->image, 21));
            }

            $imageName = asset("/uploads" . "/" . time() . '.' . $request->image->extension());

            $request->image->move(public_path('uploads/'), $imageName);
            $messages->image = $imageName;
        }
        $messages->save();

        return redirect('/broadcast/list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $messages = Message::find($id);
        if (file_exists(public_path('') . substr($messages->image, 21))) {
            unlink(public_path('') . substr($messages->image, 21));
        }
        $messages->delete();

        return redirect('/broadcast/list');
    }
}
