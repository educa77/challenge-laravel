<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    protected $primaryKey = 'id';
    protected $hidden = ['updated_at', 'created_at'];
}