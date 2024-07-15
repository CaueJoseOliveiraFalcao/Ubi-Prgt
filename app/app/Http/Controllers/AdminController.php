<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Site;
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
    public function show_user_sites($id){
        try {
            $user = User::findOrFail($id);
            $sites = $user->site ?? collect();
            return view('users-site' , compact('user','sites'));
        } catch (\Throwable $th) {
            return redirect()->route('admin.show');
        }


    }
}
