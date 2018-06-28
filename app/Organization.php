<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    protected $table = 'organization';
    public $primaryKey = 'org_id';
    public $timestamps = true;
}
