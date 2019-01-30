<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Official extends Model
{
    protected $table = 'official';
    protected $primaryKey = 'id_official';
    protected $fillable = [
        'nama', 'noidentitas', 'posisi', 'id_tim',
    ];

    public function punyaTim(){
        return $this->belongsTo(user::class, 'id', 'id_tim');
    }
}
