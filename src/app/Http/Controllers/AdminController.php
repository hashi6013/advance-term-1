<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminRequest;
use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function admin() {
        return view('admin.home');
    }

    public function add() {
        return view('admin.add');
    }

    public function store(AdminRequest $request) {
        $request['role'] = "owner";
        $request['email_verified_at'] = now();
        $request['password'] = bcrypt($request['password']);
        $owner = $request->only(['name', 'email', 'password', 'role', 'email_verified_at']);
        User::create($owner);
        return view('admin.done');
    }
}
