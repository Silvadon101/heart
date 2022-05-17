<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Http\Request;
use App\Models\Users;


class SocialAuthController extends Controller
{
    public function googleRedirect(){
        return Socialite::driver('google')->redirect();
    }
    
    public function googleCallback(){
        $user = Socialite::driver('google')->user();
        $this->createOrUpdateUser($user,'google');
        return redirect('/');
    }

    public function createOrUpdateUser($data, $provider){
        $user = Users::where('email',$data->email)->first();

        if($user){
            $user->update([
                'provider' => $provider,
                'provider_id' => $data->id,
                'avatar' => $data->avatar,
            ]);
        }else{
            $user=Users::create([
                'name'=> $data->name,
                'email'=> $data->email,
                'provider'=> $provider,
                'provider_id'=> $data->id,
                'avatar'=> $data->avatar,
            ]);
        }

        session()->put("googleuser", $data->name);

       Auth::login($user);

    }
}
