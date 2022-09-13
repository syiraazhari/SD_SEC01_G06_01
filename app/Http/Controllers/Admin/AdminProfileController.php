<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Country;
use App\Models\Province;

class AdminProfileController extends Controller
{
    public function index()
    {
        $users = User::all();
        $countries = Country::all();
        $provinces = Province::all();
        return view('admin.profile.index', compact('countries', 'provinces', 'users'));
    }

    public function update(Request $request, $id)
    {   
        $users = User::find($id);

        $users->name = $request->input('name');
        $users->email = $request->input('email');
        $users->phone = $request->input('phone');
        $users->address1 = $request->input('address1');
        $users->address2 = $request->input('address2');
        $users->province = $request->input('province');
        $users->city = $request->input('city');
        $users->zipcode = $request->input('zipcode');
        $users->update();
        
        return redirect('settings')->with('status', "Profile Updated Successfully");
    }
}
