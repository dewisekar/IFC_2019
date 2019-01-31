<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FileBerkas extends Model
{
    protected $table = 'fileberkas';
    protected $primaryKey = 'id_berkas';
    protected $fillable = [
        'title', 'filename',  'id_tim',
    ];

    public function punyaTim(){
        return $this->belongsTo(user::class, 'id', 'id_tim');
    }
}
