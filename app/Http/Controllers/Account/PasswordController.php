<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use App\Http\Requests\PasswordUpdateRequest;
use App\Mail\Account\PasswordUpdated;
use Hash;
use Illuminate\Http\Request;
use Auth;
use Mail;

class PasswordController extends Controller
{
    public function index()
    {
        return view('account.password.index');
    }

    public function update(PasswordUpdateRequest $request)
    {


        Auth::user()->update(['password' => Hash::make($request->password)]);
        Mail::to($request->user()->email)->send(new PasswordUpdated());

        return redirect()->back()->withSuccess('Password was updated successfully');
    }
}