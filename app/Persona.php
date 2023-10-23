<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class Persona extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'Persona';
}
