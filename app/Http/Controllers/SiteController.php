<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class SiteController extends Controller
{
    public function auth(Request $req) {
        /*$u = User::where([
            ['email', $req->em],
            ['password', $req->pwd],
        ])->first();

        if (isset($u)) {
            session()->put('email', $u->email);
            session()->put('name', $u->name);
            return "<script>
            alert('Welcome, " . session('name') . "');
            location.href='/product';
            </script>";
        }*/
        if (Auth::attempt([
            'email'=>$req->em,
            'password'=>$req->pwd
            ])) {

                //jika ada nilai lain selain data user yang ingin disimpan di session, baru gunakan session disini

            return redirect('/product');
            }


        return redirect('/login')->with('msg', 'Email / password salah');
        }
}
