<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\user;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;

class SocialController extends Controller
{
    //

    public function FBlogin(){
        return Socialite::driver('facebook')->redirect();
    }

    public function FBcallback(){
        $user = Socialite::driver('facebook')->user();
        $isuser = User::where('fb_id' ,'=' ,$user->id)->first();

        if($isuser){
            Auth::login($isuser);
            return redirect('attraction.index');

        }else{

            $createuser = User::create([
                'name' => $user->name,
                'email' => $user->email,
                'fb_id' => $user->id,

            ]);

            Auth::login($createuser);
            return redirect('attraction.index');
        }

    }
}
