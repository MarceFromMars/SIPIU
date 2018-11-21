<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    protected $table = 'division';

    public function user()
    {
    	return $this->hasOne(User::class, 'id_div');
    }
}
