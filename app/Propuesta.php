<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Propuesta extends Model
{
    protected $guarded = [''];
    protected $table = 'propuestas';
    //
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
