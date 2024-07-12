<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Models\Site;
class SiteController extends Controller
{
    public function show(){
        return view("site-creator");
    }

    public function create(Request $request){
        $user = Auth::user();
        $valid = $request->validate([
            'project_name' => ['required', 'string'],
            'project_desc' => ['required', 'string' , 'max:255'],
        ]);

        $site = Site::create([
            'user_id'=> $user->id,
            'projectName'=> $request->project_name,
            'desc'=> $request->project_desc,
            'status' => 'Em Analise',
            'acess_count' => 0,
            'average_public_region' => 0,
            'average_public_age' =>0
        ]);

        return redirect()->route('dashboard')->with('success');
    }
}
