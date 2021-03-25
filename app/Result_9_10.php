<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result_9_10 extends Model
{
    protected $guarded = [];
    public function student() {
        return $this->belongsTo(Student::class);
    }
    public function classDivision() {
        return $this->belongsTo(ClassDivision::class);
    }
}
