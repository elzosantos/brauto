<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Enums\Role;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasUuids;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'cpf',
        'email',
        'role_id',
        'password',
        'genre',
        'personal_phone',
        'comercial_phone',
        'status'
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
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role(): Attribute
    {
        return Attribute::make(
            set: fn (Role $role) => $role->name

        );
    }

    public function supports(): HasMany
    {
        return $this->hasMany(Support::class);
    }

    public function user_address(): HasMany
    {
        return $this->hasMany(User_address::class);
    }

    public function vehicle_user(): HasMany
    {
        return $this->hasMany(Vehicle_user::class);
    }

    public function reports(): HasMany
    {
        return $this->hasMany(Report::class);
    }
}
