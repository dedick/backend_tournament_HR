<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $fillable = ['firstname', 'lastname', 'birthday', 'email', 'phone', 'school', 'studies', 'active', 'laptop', 'level', 'onGame', 'timestamp', 'comment'];
    public $timestamps = false;
}