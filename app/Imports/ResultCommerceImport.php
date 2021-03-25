<?php

namespace App\Imports;

use App\Result_11_12com;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\Importable;

class ResultCommerceImport implements ToModel, WithHeadingRow
{
    use Importable;
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Result_11_12com([
            'student_id'    => $row['student_code'],
            'english'       => $row['english'],
            'dzongkha'      => $row['dzongkha'],
            'bmaths'	    => $row['bmaths'],
            'commerce'      => $row['commerce'],
            'accounts'      => $row['accounts'],
            'eco_it'	    => $row['eco_it']
        ]);
    }
}
