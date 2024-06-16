<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function edit() {
        $user = User::latest()->first();
        return view('dashboard.password',['user'=>$user]);
    }
    public function update(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|',
        ]);
        DB::table('users')
            ->where('id', 1)
            ->update([
                "email"=>$request->get('email'),
                'password' => Hash::make($request->get('password')),
            ]);
        return redirect()->intended('dashboard');
    }
}
