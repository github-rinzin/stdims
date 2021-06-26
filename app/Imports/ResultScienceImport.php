<?php

namespace App\Imports;

use App\Result_11_12sci;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\Importable;

class ResultScienceImport implements ToModel, WithHeadingRow
{
    use Importable;
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Result_11_12sci([
            'student_id'    => $row['student_code'],
            'english'       => $row['english'],
            'dzongkha'      => $row['dzongkha'],
            'maths'	        => $row['maths'],
            'biology'       => $row['biology'],
            'physics'       => $row['physics'],
            'chemistry'     => $row['chemistry']
        ]);
    }
}
