<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
class Site extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'projectName',
        'status',
        'desc',
        'acess_count',
        'average_public_region',
        'average_public_age'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function siteRegister(): HasMany
    {
        return $this->hasMany(SiteRegister::class);
    }
}
