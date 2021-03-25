<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stream extends Model
{
    protected $fillable = [
        'id',
        'name',
    ];
    public function classDivision(){
        return $this->hasMany(ClassDivision::class);
    }
}
