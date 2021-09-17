<?php

namespace App\Http\Controllers;

use App\Login;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\New_;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $logins = Login::paginate(20);

        return view('logins.index', compact('logins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('logins.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $login = new Login();
        $login->login = $request->login;
        $login->pass = $request->pass;
        $login->save();

        return redirect('/login/list');
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
        $logins = Login::where('id', $id)->get();

        return view('logins.edit', compact('logins'));
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
        $login = Login::findOrFail($id);
        $login->login = $request->login;
        $login->pass = $request->pass;
        $login->save();

        return redirect('/login/list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $managers = Login::find($id);
        $managers->delete();

        return redirect('/login/list');
    }
}
