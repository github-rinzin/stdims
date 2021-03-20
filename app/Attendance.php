<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    public function student() {
        return $this->belongsTo(Student::class);
    }
    public function teacher() {
        return $this->belongsTo(Teacher::class);
    }
    // public function studentDetails() {
    //     return Student::findOrFail($this->student_id);
    // }
}
