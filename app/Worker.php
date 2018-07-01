<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    //
    protected $table = 'workers';
    public $primaryKey = 'worker_id';
    public $timestamps = false;
}
