<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Tymon\JWTAuth\Contracts\JWTSubject;


class User extends Authenticatable implements JWTSubject
{
    use HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firebase_id',
        'name',
        'email',
        'password',
        'phone',
        'status',
        'phone',
        'mobile',
        'address',
        'office_address',
        'thumbnail',
        'image',
        'isonline',
        'role_id',
        'type',
        'dp'
    ];

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }
    public function getJWTCustomClaims()
    {
        return [];
    }

    public function role(){
        return $this->belongsTo(Role::class,'role_id');
    }

    public function agency(){
        return $this->hasOne(Agency::class,'user_id');
    }
    public function agent(){
        return $this->hasOne(Agent::class,'user_id');
    }

    public function properties(){
        return $this->hasMany(Property::class,'user_id');
    }

    public function project(){
        return $this->hasOne(Project::class,'user_id');
    }

    public function projectUser(){
        return $this->hasOne(ProjectUser::class,'user_id');
    }
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
