<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function loginForm(){
        return view('Admin.Users.frmUser');
    }
    public function login(Request $request)
    {
        $credentials = $request->only(['email', 'password']);
        if ($credentials) {
            // return Auth::user();
            return redirect(route('dashboard'));
        }else{
            return response()->json(['error'=>'Account not activate']);
        }
    }
}
