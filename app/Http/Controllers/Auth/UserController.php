<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function loginForm(){
        return view('Admin.Users.frmUser');
    }
    public function login(Request $request)
    {
        $data = User::where('email', $request->email)->first();
        if(!empty($data)) {
            if (Hash::check($request->password, $data->password)) {
                return redirect(route('dashboard'))->with(['success'=>'hhh!']);
            } else {
                return redirect(route('login'))->with(['error'=>'Incorrect password!']);
            }
        } else {
            return redirect(route('login'))->with(['error'=>'Account not fund!']);
        }
    }

    public function userForm() {
        return view('Admin.Users.frmCreateUser');
    }
    public function CreateUser(Request $request)
    {
        $user= new User();
;       $user->name = request('name');
        $user->gender = request('gender');
        $user->date_of_birth = request('date_of_birth');
        $user->email = request('email');
        $user->password = request('password');
        $user->save();
        return redirect('Admin/user');

    }
    public function show( User $user )
   {
    $users = User::all();
    return view('Admin.Users.user_list', compact('users'));

   }
}
