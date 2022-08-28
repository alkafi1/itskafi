<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Auth;
use Carbon\Carbon;
use Image;

class UserController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    function index()
    {
        $users = User::all();
        return view('admin.user.index',[
            'users' => $users,
        ]);
    }
    function user_update($user_id)
    {
        $user = User::where('id',$user_id)->first();
        return view('admin.user.user_update',[
            'user' => $user,
        ]);
    }

    function update_post(Request $request)
    {
        $user = User::find($request->user_id);
        if($request->image){
            $image = $request->image;
            $extension = $image->getClientOriginalExtension();
            $image_name = $request->user_id.'.'.$extension;
            if($user->image){
                $image_path = public_path('/uploads/users/'.$user->image);
                unlink($image_path);
            }
            
            Image::make($image)->save(public_path('/uploads/users/').$image_name)->resize(100, 100);
            User::where('id',$request->user_id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'image' => $image_name,
                'password' => Hash::make($request->password),
                'updated_at' => Carbon::now(),
            ]);
            return back()->with('succes','User Update Successfully.');
        }
        else
        {
            User::where('id',$request->user_id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'updated_at' => Carbon::now(),
            ]);
            return back()->with('succes','User Update Successfully.');
        }
        
    }

    function user_delete($user_id)
    {
        $user = User::find($user_id)->delete();
        return back()->with('succes','User Deleted.');
    }
}
