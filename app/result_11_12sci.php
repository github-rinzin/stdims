<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result_11_12sci extends Model
{
    protected $guarded = [];
    public function student() {
        return $this->belongsTo(Student::class);
    }
}
