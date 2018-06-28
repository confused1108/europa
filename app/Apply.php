<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apply extends Model
{
    //
    protected $table = 'application';
    public $primaryKey = 'app_id';
    public $timestamps = true;
}