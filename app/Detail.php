<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    public function car()
    {
        return $this->belongsTo(Cars::class);
    }
}