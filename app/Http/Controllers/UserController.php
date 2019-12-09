<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index')->with(compact('users'));
    }

    public function list()
    {
        //$users = User::all();

        //return response()->json($users);
        
        return User::orderBy('id', 'DESC')->paginate();
    }

    public function show($id)
    {
        return User::where('id', $id)->first();
    }
}