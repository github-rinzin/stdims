<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result_7_8 extends Model
{
    public function student() {
        return $this->belongsTo(Student::class);
    }
}
