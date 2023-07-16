<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use App\Http\Requests\PasswordUpdateRequest;
use Hash;
use Illuminate\Http\Request;
use Auth;

class PasswordController extends Controller
{
    public function index()
    {
        return view('account.password.index');
    }

    public function update(PasswordUpdateRequest $request)
    {


        Auth::user()->update(['password' => Hash::make($request->password)]);

        return redirect()->back();
    }
}