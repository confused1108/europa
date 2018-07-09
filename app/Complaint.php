<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    protected $table = 'complaints';
    public $primaryKey = 'complain_id';
    public $timestamps = false;
}
