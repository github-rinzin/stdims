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
    public function teacher() {
        return $this->hasOne(Teacher::class);
    }
    public function students() {
        return $this->hasMany(Student::class);
    }
    public function stream() {
        return $this->belongsTo(Stream::class);
    }
    public function result78s() {
        return $this->hasMany(Result_7_8::class);
    }
    public function result910s() {
        return $this->hasMany(Result_9_10::class);
    }
    public function result112coms() {
        return $this->hasMany(Result_11_12com::class);
    }
    public function result112arts() {
        return $this->hasMany(Result_11_12arts::class);
    }
    public function result112scis() {
        return $this->hasMany(Result_11_12sci::class);
    }  
}
