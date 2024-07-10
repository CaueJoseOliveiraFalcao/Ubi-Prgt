<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Site extends Model
{
    use HasFactory;
    protected $fillable = [
        'projectName',
        'status',
        'acess_count',
        'average_public_region',
        'average_public_age'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
