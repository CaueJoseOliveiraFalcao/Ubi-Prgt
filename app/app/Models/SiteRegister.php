<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteRegister extends Model
{
    protected $fillable = [
        'user_id',
        'site_id',
        'today_acess'
    ];
    use HasFactory;
    public function site()
    {
        return $this->belongsTo(Site::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
