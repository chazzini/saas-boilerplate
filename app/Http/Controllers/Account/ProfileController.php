<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\Request;
use Auth;

class ProfileController extends Controller
{
    public function index()
    {
        return view('account.profile.index');
    }


    public function update(ProfileUpdateRequest $request)
    {

        Auth::user()->update(
            $request->only(['name', 'email'])
        );

        return redirect()->back()->withSuccess('Profile successfully updated');
    }
}