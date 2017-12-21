<?php

namespace App\Http\Controllers;

use App\Login;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function register(Request $request)
    {
        $input = Login::create([
            "name" => $request->personName,
            "kode" => $request->personId
        ]);

        echo json_encode($input);
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function testLogin(Request $request)
    {
        if ($request->get('personId') == null) {
            $person = 'tidak ada';
        } else {
            $person = $request->get('personId');
        }

        $get = User::where('personId', $person)->get();

        echo json_encode($get);
    }

//    public function attempt(Request $request)
//    {
//        $attempts = [
//            'password' => $request->get('personId'),
//        ];
//        if (Auth::attempt($attempts, (bool) $request->remember)) {
//            return redirect()->intended('/home');
//        }
//        echo json_encode($attempts);
//        return redirect()->('/');
//
//    }
}
