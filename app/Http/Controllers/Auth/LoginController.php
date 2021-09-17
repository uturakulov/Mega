<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function loginView()
    {
        // $hash = Hash::make('J9&GeVY');
        return view('login');
    }

    public function loginPost(Request $request)
    {
        $this->validate($request, [
            'name'   => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt(['name' => $request->name, 'password' => $request->password])) {
            return redirect('/');
        }
        return redirect()->route('login')->with('error', 'Not\'g\'ri kiritilgan');
    }

    public function logout()
    {
        if (Auth::check()) {
            Auth::logout();
        }
        return redirect()->route('login');
    }
}
