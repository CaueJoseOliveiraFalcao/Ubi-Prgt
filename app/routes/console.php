<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();
Schedule::call(function () {
    DB::table('recent_users')->delete();
})->daily();
Schedule::call(function () {
    function create_site_register($site_id, $user_id)
{
    $siteRegister = SiteRegister::create([
        'user_id' => $user_id,
        'site_id' => $site_id,
        'today_acess' => 100
    ]);
    $siteRegister->save();
}
    $today = Carbon::today();

    $sites = Site::all();
    $sitesRegister = SiteRegister::all();

    if (!$sitesRegister->isEmpty() && !$sites->isEmpty()) {
        foreach ($sites as $site) {
            $siteRegisterToday = $sitesRegister->where('site_id', $site->id)
                ->whereDate('created_at', $today)
                ->first();

            if (!$siteRegisterToday) {
                create_site_register($site->id, $site->user_id);
            }
        }
    }

    if ($sitesRegister->isEmpty() && !$sites->isEmpty()) {
        foreach ($sites as $site) {
            create_site_register($site->id, $site->user_id);
        }
    }
})->hourly();

