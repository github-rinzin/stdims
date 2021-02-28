<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassDivision extends Model
{
    //
    public function division() {
        return $this->belongsTo(Division::class);
    }
    public function grade() {
        return $this->belongsTo(Grade::class);
    }
}
