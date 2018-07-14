<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{
    //
    protected $table = 'leave_apply';
    public $primaryKey = 'leave_id';
    public $timestamps = false;
}
