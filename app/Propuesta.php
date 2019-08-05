<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Propuesta extends Model
{
    protected $guarded = [''];
    protected $table = 'propuestas';
    use SoftDeletes;
  
    protected $dates = ['deleted_at'];
    //
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function comentarios()
    {
        return $this->hasMany(Comentario::class)->whereNull('parent_id');
    }

   public function donacion($id){
        $donacion= DB::table('pagos')
        ->where('id_proyecto', $id)
        ->sum('donacion');
        return $donacion;
   }

   public function actualizaciones()
    {
        return $this->hasMany('App\Actualizacion');
    }
}
