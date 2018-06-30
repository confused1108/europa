<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    //
    protected $table = 'admin';
    public $primaryKey = 'admin_id';
    public $timestamps = false;
}
