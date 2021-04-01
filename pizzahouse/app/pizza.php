<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pizza extends Model
{
//  protected $table='som name';
protected $casts=[
    'toppings'=>'array'
];
}
