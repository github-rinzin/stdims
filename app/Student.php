<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function address() {
        return $this->hasOne(Address::class);
    }
    public function statements() {
        return $this->hasMany(Statement::class);
    }
    public function attendances() {
        return $this->hasMany(Attendance::class);
    }
    public function user() {
        return $this->belongsTo(User::class);
    }
}
