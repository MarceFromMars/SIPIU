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
        'nombre', 'apellido_p','apellido_m','fecha_nac','tipo', 'password','username','id_div',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function tipo_user()
    {
        return $this->hasOne('App\Tipo_usuario','id','tipo');
                            /*La llave que uso de la otra tabla, la llave de esta*/
    }

    public function division()
    {
        return $this->hasOne('App\Division','id','id_div');
                            /*La llave que uso de la otra tabla, la llave de esta*/
    }

    public function obten($id)
    {
        /*Hcaemos la consulta para encontrar el tipo que corresponde al usuario y le asignamos la propiedad del tipo*/
        $var = User::where('id', $id)->first()->tipo_user;
        return $var->descripcion;
        /*Obtenemos la descripcion del tipo de usuario*/
    }
    
    public function obten_div($id)
    {
        /*Hcaemos la consulta para encontrar el tipo que corresponde al usuario y le asignamos la propiedad del tipo*/
        $var = User::where('id', $id)->first()->division;
        return $var->descripcion;
        /*Obtenemos la descripcion del tipo de usuario*/
    }

    public function hasRole($role){

        return $this->tipo == $role;
    }
}


    /*table = "nombre de la tabla" para definirla*/
    /*$var = \DB::table('tipo_usuario')->where('id',auth()->user()->tipo)->first();
    return $var->descripcion;*/
    /*$auxiliar = Tipo_usuario::where('id',auth()->user()->tipo)->first();
    return $auxiliar->descripcion;*/
