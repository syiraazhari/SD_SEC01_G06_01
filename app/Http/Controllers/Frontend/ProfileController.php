<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Profile;
use App\Models\Province;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ProfileController extends Controller
{
    public function index()
    {
        $users = User::all();
        $countries = Country::all();
        $provinces = Province::all();
        return view('frontend.profile.index', compact('countries', 'provinces', 'users'));
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
