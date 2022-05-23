<?php

namespace Ziainnovation\Mailbox\Http\Traits;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Ziainnovation\Mailbox\Http\Models\useremail;



trait userEmailTrait{

    public static function check()
    {

        $users = User::all();
        $domain = $_SERVER["SERVER_NAME"];

        foreach($users as $user)
        {
            $e = useremail::where('user_id',$user->id)->first();
            if(!$e){
                $email = $user->name.'@'.$domain;

                useremail::Create([
                    'user_id' => $user->id,
                    'email' => $email,
                ]);
            }

        }

    }

    public static function getEmail()
    {
        $e = useremail::where('user_id',Auth::user()->id)->first();
        $email = $e->email;

        return $email;
    }
}
