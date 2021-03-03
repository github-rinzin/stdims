<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ClassDivision;
use App\Student;

class Teacher extends Model
{
    public function user() {
        return $this->belongsTo(User::class);
    }
    public function attendances() {
        return $this->hasMany(Attendance::class);
    }
    public function classDivision() {
        return $this->belongsTo(classDivision::class);
    }
    // public function grade() {
    //     return  ClassDivision::find($this->class_division_id)->grade->numeric;
    // }
    // public function division() {
    //     return ClassDivision::find($this->class_division_id)->division->name;
    // }
    // public function attendancesOfTeacher() {
    //     return Attendance::where('teacher_id', $this->id);
    // }
    // public function totalStudents() {
    //     return Student::where('class_division_id', $this->class_division_id)->count();
    // }
}
