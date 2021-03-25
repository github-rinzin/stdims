<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $guarded = [];
    public function address() {
        return $this->hasOne(Address::class);
    }
    public function attendances() {
        return $this->hasMany(Attendance::class);
    }
    public function classDivision() {
        return $this->belongsTo(ClassDivision::class);
    }
    public function resultPP6s() {
        return $this->hasMany(Result_pp_6::class);
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
    public function statements() {
        return $this->hasMany(Statement::class);
    }
    public function user() {
        return $this->belongsTo(User::class);
    }
    public function joinReq() {
        return $this->hasOne(JoinRequest::class);
    }
    
    public function attendanceStatus() {         
        $numerator =  Attendance::where('student_id', $this->id)->whereYear('created_at', date('Y'))->where('status', "true")->count();
        $denomerator = Attendance::where('student_id', $this->id)->whereYear('created_at', date('Y'))->count();
        $percentage = 0;
        if( $denomerator == 0) 
            $percentage = 0;
        else
            $percentage = ($numerator / $denomerator) * 100 ;
        return ['numerator' => $numerator, 'denomerator' => $denomerator, 'percentage' => $percentage] ;
    }

    public function statementCount() {
        $count = Statement::where('student_id', $this->id)->count();
        return $count;
    }
}
