<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Technology extends Model
{
    //
    protected $table='technology';

    protected $fillable=['screen','system','cpu	','ram','rom','memory','pin','product_id'];



}
