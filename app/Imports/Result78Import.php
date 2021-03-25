<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\Importable;
use App\Result_7_8;

class Result78Import implements ToModel, WithHeadingRow
{
    use Importable;
    public function model(array $row)
    {
        return new Result_7_8([
            'student_id'    => $row['student_code'],
            'english'       => $row['english'],
            'dzongkha'      => $row['dzongkha'],
            'maths'	        => $row['maths'],
            'history'	    => $row['history'],
            'geography'	    => $row['geography'],
            'science'	    => $row['science'],
        ]);
    }
}
