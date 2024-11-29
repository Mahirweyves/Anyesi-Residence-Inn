<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    public function allusers()
    {
        $data=User::orderBy('id', 'asc')->paginate(6);
        return view('admin.allusers', compact('data'));
    }

    public function adduser()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype==1)
            {
                return view('admin.adduser');
            }
            else
            {
                return redirect()->back();
            }
        }
        else
        {
            return redirect('login');
        }
    }

    public function submituser(Request $request)
    {
        $data=new user;
        $data->name=$request->name;
        $data->email=$request->email;
        $data->phone_number=$request->phone;
        $data->password=$request->password;

        $data->save();
        return redirect('allusers')->with('message','User added Successfully.');;
    }

    public function edit(Request $request , $id)
    {
        $user = User::find($id);
        $user->name=$request->name;
        $user->email=$request->email;
        $user->phone_number=$request->phone_number;
        $user->password=$request->password;

        $user->save();
        return redirect()->back()->with('message','User updated Successfuly.');
    }

    public function deleteuser($id)
    {
        $data = user::find($id);
        $data->delete();
        return redirect()->back();
    }
    
    
}
