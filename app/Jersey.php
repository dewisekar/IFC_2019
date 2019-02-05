<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jersey extends Model
{
    protected $table = 'jersey';
    protected $primaryKey = 'id_jersey';
    protected $fillable = [
        'id_tim', 'jersey', 'celana', 'kaoskaki',
    ];

    public function punyaTim(){
        return $this->belongsTo('App\User', 'id_tim', 'id');
    }
}
