<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AdminController extends Controller
{
    //

    public function show(){
        $me = Auth::user();

        $users = User::where("id", '!=' , $me->id)->get();

        return view('admin-painel',['users' => $users]);

    }
}
