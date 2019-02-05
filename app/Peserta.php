<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    protected $table = 'peserta';
    protected $primaryKey = 'id_peserta';
    protected $fillable = [
        'id_tim', 'nama', 'nrp', 'nopunggung', 'posisi'
    ];

    public function punyaTim(){
        return $this->belongsTo(user::class, 'id_tim', 'id');
    }
}
