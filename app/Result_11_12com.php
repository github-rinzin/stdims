<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result_11_12com extends Model
{
    public function student() {
        return $this->belongsTo(Student::class);
    }
}
