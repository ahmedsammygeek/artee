<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\Follower;
class ProfileController extends Controller
{
   
    public function index()
    {
        $user = Auth::user();
        return view('site.profile' , compact('user') );
    }


    public function wishlist()
    {
        return view('site.wishlist');
    }

    public function followers()
    {
        $followers = Follower::with('user')->where('designer_id' , '='  , Auth::id())->get();
        return view('site.followers' , compact('followers') );
    }


    public function diamond()
    {
        return view('site.diamond');
    }

    
}
