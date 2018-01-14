<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    protected $table = "cars";
    protected $fillable = ["model_id","year","km"];
}