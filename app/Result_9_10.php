<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result_9_10 extends Model
{
    public function student() {
        return $this->belongsTo(Student::class);
    }
}
