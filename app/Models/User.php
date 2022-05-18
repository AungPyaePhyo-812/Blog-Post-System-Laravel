<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Traits\HasRoles;



class User extends Authenticatable
{
    use HasApiTokens, HasFactory,HasRoles, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
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

    public function roles(){
        return $this->belongsToMany(Role::class,'role_users');
    }

    public function hasRole($r){
        $roles = Auth::user()->roles;
        $hasRole = false;
        foreach($roles as $role){
            if($role->name == $r){
                $hasRole = true;
                break;
            }
        }
        return $hasRole;
    }

    public function hasNotRole($r){
        $roles = Auth::user()->roles;
        $hasRole = false;
        foreach($roles as $role){
            if($role->name != $r){
                $hasNotRole = true;
                break;
            }
        }
        return $hasNotRole;
    }
}
