<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actualizacion extends Model
{
    //
    protected $guarded = [''];
    
    public function propuesta()
    {
        return $this->belongsTo(Propuesta::class);
    }
}
