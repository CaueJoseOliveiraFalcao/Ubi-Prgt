<?php

namespace App\Http\Controllers;
use App\Models\SiteRegister;
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
        $public_age_ramdom = rand(17,70);
        $acces = rand(109,1000);
        $site = Site::create([
            'user_id'=> $user->id,
            'projectName'=> $request->project_name,
            'desc'=> $request->project_desc,
            'status' => 'Em Analise',
            'acess_count' => $acces,
            'average_public_region' => 'Brazil',
            'average_public_age' => $public_age_ramdom
        ]);
        dd($site);
        $site->save();
        return redirect()->route('dashboard')->with('success');
    }

    public function change_status($id , Request $request){
        try {
            $site = Site::findOrFail($id);
            $site->status = $request->status;
            $site->save();
            return redirect()->route('user-web-sites', ['id' => $site->user_id])->with('success', 'Status atualizado com sucesso.');
        } catch (\Throwable $th) {
            return redirect()->route('user-web-sites' , ['id' => $site->user_id]);
        }
    }
}
