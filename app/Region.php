<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    //
    protected $table = 'regions';
    public $primaryKey = 'region_id';
    public $timestamps = false;
}
