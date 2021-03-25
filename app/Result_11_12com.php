<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result_11_12com extends Model
{
    protected $guarded = [];
    public function student() {
        return $this->belongsTo(Student::class);
    }
    public function classDivision() {
        return $this->belongsTo(ClassDivision::class);
    }
}
