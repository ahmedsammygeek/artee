<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
class ProfileController extends Controller
{
   
    public function index()
    {
        $user = Auth::user();
         return view('site.profile' , compact('user') );
    }

    
}
