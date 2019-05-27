<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    protected $table='Usuarios';

    protected $pimaryKey="iduser";

    public $timestamps= false;

}
