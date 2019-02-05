<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'jenis',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function peserta(){
        return $this->hasMany(peserta::class, 'id_tim', 'id');
    }

    public function official(){
        return $this->hasMany(official::class, 'id_tim', 'id');
    }

    public function fileberkas(){
        return $this->hasMany(fileberkas::class, 'id_tim', 'id');
    }

    public function jersey(){
        return $this->hasMany(jersey::class, 'id_tim', 'id');
    }
}
