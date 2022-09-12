<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Staff;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{

    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
        
        // $users = Staff::all();
        // return view('admin.staff.index', compact('users'));
    
        
    }

    public function add()
    {
        $users = User::all();
        return view('admin.users.add');
    
    }

    public function edit($id)
    {
        $users = User::find($id);
        return view('admin.users.edit', compact('users'));

        
    }

    public function update(Request $request, $id)
    {
        $users = User::find($id);
        $users->name = $request->input('name');
        $users->email = $request->input('email');
        $users->role_as = $request->input('role_as');
        $users->update();
        return redirect('users')->with('status', "Users Updated Successfully");
        
    }

    public function destroy(Request $request, $id)
    {
        $users = User::find($id);
        $users->delete();
        return redirect('users')->with('status', "Users Deleted Successfully");
    
    }

}
