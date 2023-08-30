<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class profileController extends Controller
{
    public function index(){
        return view('profile');
    }

    public function update(Request $request){
        $request->validate([
            'fname' => 'required|max:25',
            'lname' => 'required|max:25',
            'email' => 'required|email:dns|unique:users',
            'role_id' => 'required',
            'gender_id' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png|image',
            'password' => 'required|min:8|alpha_num',
            'Confirmpassword' => 'required|same:password'
        ]);

        Storage::delete($request->oldimage);
        Storage::putFileAs('/public/img/profile', $request->image, $request->image->getClientOriginalName());

        $createUser = [
            'fname' => $request->fname,
            'lname' => $request->lname,
            'email' => $request->email,
            'role_id' => $request->role_id,
            'gender_id' => $request->gender_id,
            'image' => $request->image->getClientOriginalName(),
            'password' => $request->password,
            'Confirmpassword' => $request->Confirmpassword
        ];

        $createUser['password'] = bcrypt($createUser['password']);
        $createUser['Confirmpassword'] = bcrypt($createUser['Confirmpassword']);

        DB::table('users')->where('id',$request->userID)->update($createUser);
        return view('/updProfile');
    }

    public function success(){
        return view('updProfile');
    }

    public function manage(){
        return view('manage', [
            "users" => User::all(),
            "roles" => Role::all()
        ]);
    }

    public function ShowUpdateRole($user_id){
        return view('updRole', [
            "user" => User::find($user_id)
        ]);
    }

    public function UpdateRole(Request $request){
        $editRole = [
            'role_id' => $request->role_id
        ];
        DB::table('users')->where('id',$request->userID)->update($editRole);
        return redirect('/manageAccount');
    }

    public function delete($user_id){
        DB::table('users')->where('id', $user_id)->delete();
        return back();
    }
}
