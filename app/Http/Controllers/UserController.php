<?php

namespace App\Http\Controllers;

use App\User;
use App\Model\UserAddress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function showProfile()
    {
        $userData = Auth()->user();
        $userAddress = auth()->user()->user_addresses()->first();
        return view('auth.profile', compact('userData', 'userAddress'));
    }

    public function address(Request $request)
    {
        $validateData = $request->validate([
            'addressline1' => 'required',
            'addressline2' => '',
            'addressline3' => '',
            'pincode' => 'required',
            'number' => 'required',
        ]);
        $data = auth()->user()->user_addresses()->create($validateData);
        return back()->with('success', 'Inserted Successfully.');
    }

    public function addressupdate(UserAddress $address, Request $request)
    {
        $address->update($request->validate([
            'addressline1' => 'required',
            'addressline2' => '',
            'addressline3' => '',
            'pincode' => 'required',
            'number' => 'required',
        ]));
        return redirect(route('home'))->with('success', 'Address Updated Successfully.');
    }

    public function profile(User $user, Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|min:4',
            'email' => 'required|email',
        ]);

        if ($user->email === $request->email) {
            $user->update($validateData);
        } else {
            $validateData = $request->validate([
                'name' => 'required|min:4',
                'email' => 'required|email|unique:users',
            ]);
            $user->update($validateData);
        }
        return redirect(route('home'))->with('success', 'Profile Updated Successfully.');
    }

    public function showChangePasswordForm()
    {
        return view('auth.passwords.change');
    }
    
    public function changePassword(Request $request)
    {
        $data = $request->validate([
            'oldPassword'   => 'required',
            'password'      => 'required|confirmed',
        ]);
        if (Hash::check($request->oldPassword, auth()->user()->password)) {
            auth()->user()->update([
                'password' => Hash::make($data['password'])
            ]);
            return redirect(route('home'))->with('success', 'Your password is changed successfully');
        } else {
            return back()->with('error', 'Old Password does not match');
        }
    }
}
