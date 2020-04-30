<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class room extends Model
{
    protected $fillable = ['adress', 'price', 'ownerid', 'image'];
}
