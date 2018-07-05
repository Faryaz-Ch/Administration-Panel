<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    public function pathway()
    {
        return $this->belongsTo('App\Pathway');
    }
}
