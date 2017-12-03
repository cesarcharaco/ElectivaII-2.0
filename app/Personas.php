<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personas extends Model
{
    protected $table='personas';

    protected $fillable=['nombres','apellidos','nacionalidad','cedula'];
}
