<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Site\LoginRequest;
use Auth;
class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function form()
    {
        return view('site.login');
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->only(['email' , 'password']);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended(url('/'));
        }
        return back()->with('error' , trans('site.credentials_not_corrent') );
    }

  
}
