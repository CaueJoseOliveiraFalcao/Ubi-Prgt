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

        $site = Site::create([
            'user_id'=> $user->id,
            'projectName'=> $request->project_name,
            'desc'=> $request->project_desc,
            'status' => 'Analise de Requisitos',
            'acess_count' => 0,
            'average_public_region' => 0,
            'average_public_age' =>0
        ]);

        return redirect()->route('dashboard')->with('success');
    }
    public function create_site_registe($site_id , $user_id){

        $siteRegister = SiteRegister::create([
            'user_id' => $user_id,
            'site_id' => $site_id,
            'today_acess' => 100
        ]);
        $siteRegister->save();
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
