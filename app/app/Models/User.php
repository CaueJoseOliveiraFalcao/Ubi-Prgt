<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Permission;
use App\Models\Site;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'telefone',
        'cnpj'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    public function givePermissionTo(string $permission): void 
    {
        /**@var Permission $p  */
        $p = Permission::query()->firstOrCreate(['permission' => $permission]);
        $this->permissions()->attach($p);
    }
    public function hasPermissionTo(string $permission) : bool
    {
        return $this->permissions()->where('permission', $permission)->exists();
    }
    public function permissions(): BelongsToMany
    {
        return $this->belongsToMany(Permission::class);
    }
    public function site(): HasMany
    {
        return $this->hasMany(Site::class);
    }
}
