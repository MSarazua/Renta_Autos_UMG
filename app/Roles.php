<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class Roles extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'Roles';
}
