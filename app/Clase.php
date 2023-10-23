<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class Clase extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'Clase';
}
