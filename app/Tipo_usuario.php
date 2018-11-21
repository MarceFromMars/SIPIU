<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo_usuario extends Model
{
    protected $table = 'tipo_usuario';

    protected $fillable =  ['descripcion'];

    public function user()
    {
    	return $this->hasOne(User::class, 'tipo');
    }
    
}
