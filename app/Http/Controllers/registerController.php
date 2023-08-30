<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class registerController extends Controller
{
    public function index(){
        return view('register');
    }

    public function addData(Request $request){
        Storage::putFileAs('/public/img/profile', $request->image, $request->image->getClientOriginalName());
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

        DB::table('users')->insert($createUser);

        return redirect('login')->with('success', 'Registration Success! Please Login');
    }
}
