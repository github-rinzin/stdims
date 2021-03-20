<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use App\Result_7_8;
use App\Student;

class Result78Import implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        $student = Student::where('code', $row['student_code'])->first();
        return new Result_7_8([
            'english'       => $row['english'],
            'dzongkha'      => $row['dzongkha'],
            'maths'	        => $row['maths'],
            'history'	    => $row['history'],
            'geography'	    => $row['geography'],
            'science'	    => $row['science'],
            'student_id'    => $student->id,
        ]);
    }
}
