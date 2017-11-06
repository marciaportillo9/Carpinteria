<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    protected $fillable = ['name', 'nit', 'email','phone', 'address' ];
}
