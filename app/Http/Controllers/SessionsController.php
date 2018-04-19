<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SessionsRequest;

class SessionsController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest')->except('destroy');
    }

    public function show()
    {
        return view('admin.login');
    }

    public function create(SessionsRequest $request)
    {
        // dd(request(['username', 'password']));

        if(auth()->attempt(request(['username', 'password']))){
            return redirect('/admin/home');
        }

        return back()->withErrors([
            'message' => 'Invalid login credentials.'
        ]);
    }

    public function destroy()
    {
        auth()->logout();

        return redirect('/admin');
    }

}
