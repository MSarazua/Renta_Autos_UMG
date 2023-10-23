<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class Vehiculo extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'Vehiculo';
}
