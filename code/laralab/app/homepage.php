<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class homepage extends Model
{
    //
    protected $table = "homepage";
    public $timestamps = false;
    protected $fillable = ['name','work','status','share'];
}
