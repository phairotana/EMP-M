<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Validator;


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
        $filePath = '';
        if($request->file()) {
            $fileName = time().'_'.$request->file('image')->getClientOriginalName();
            $filePath = $request->file('image')->storeAs('uploads', $fileName, 'uploads');
        }

        $user = new User();

        $user->name = request('name');
        $user->gender = request('gender');
        $user->date_of_birth = request('date_of_birth');
        $user->email = request('email');
        $user->address = request('address');
        $user->password = request('password');
        $user->image = $filePath;
        $user->save();
        return redirect('admin/user-list')->with('success','User has been created successfully.');

    }
    public function list()
   {
    $users = User::all();
        return view('Admin.Users.user_list', compact('users'));
   }
   public function show($id)
   {
       $user = User::find($id);
       return view('Admin.Users.userShowdata', compact('user'));
   }
   public function destroy($id)
    {
        User::where('id',$id)->delete();
        return redirect('admin/user-list')->with('success', 'Delete successfully');
    }
    public function edit($id)
    {
        $user = User::find($id);
        return view('Admin.Users.frmUpdate',compact('user'));
    }


    public function update(Request $request , $id)
    {
        $user = User::find($id);

        $filePath = '';
        if($request->file()) {
            $fileName = time().'_'.$request->file('image')->getClientOriginalName();
            $filePath = $request->file('image')->storeAs('uploads', $fileName, 'uploads');
        }else{
            $filePath = $request->old_image;
        }

        $user->name = request('name');
        $user->gender = request('gender');
        $user->date_of_birth = request('date_of_birth');
        $user->email = request('email');
        $user->address = request('address');
        $user->password = request('password');
        $user->image = $filePath;
        $user->save();
        return redirect('admin/user-list')->with('success', 'Update successfully');
   }
}
