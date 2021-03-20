<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result_pp_6 extends Model
{
    protected $guarded = [];
    public function student() {
        return $this->belongsTo(Student::class);
    }
}
