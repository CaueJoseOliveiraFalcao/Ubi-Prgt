<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;
use App\Models\Site;
use App\Models\SiteRegister;
use App\Http\Controllers\SiteController;
class CheckandAddPointsR extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'check:addpoints';
    public function __construct(SiteController $siteController)
    {
        parent::__construct();
        $this->siteController = $siteController;
    }

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $today = Carbon::today();

        $Sites = Site::all();
        $SitesRegister = SiteRegister::all();
        if (!$SitesRegister->isEmpty() && !$Sites->isEmpty()) {
            foreach ($Sites as $Site) {
                $siteRegisterToday = $SitesRegister->where('site_id' , $Site->id)
                    ->where('created_at', $today)
                    ->first();

                if (!$siteRegisterToday) {
                    $this->create_site_register($Site->id , $Site->user_id);
                }
        };
        }
        if ($SitesRegister->isEmpty() && !$Sites->isEmpty()) {
            foreach ($Sites as $Site) {
                $this->create_site_register($Site->id , $Site->user_id);
            }

        }
        
}
protected function create_site_register($site_id, $user_id)
{
    $siteRegister = SiteRegister::create([
        'user_id' => $user_id,
        'site_id' => $site_id,
        'today_acess' => 100
    ]);
    $siteRegister->save();
}
}