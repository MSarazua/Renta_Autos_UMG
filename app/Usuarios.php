<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class Usuarios extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'Usuarios';
}
