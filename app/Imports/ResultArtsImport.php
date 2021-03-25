<?php

namespace App\Imports;

use App\Result_11_12arts;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\Importable;

class ResultArtsImport implements ToModel, WithHeadingRow
{
    use Importable;
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Result_11_12arts([
            'student_id'    =>$row['student_code'],
            'english'       => $row['english'],
            'dzongkha'      => $row['dzongkha'],
            'bmaths'	    => $row['bmaths'],
            'history'	    => $row['history'],
            'geography'	    => $row['geography'],
            'eco_it'        => $row['eco_it'],
            'media'         => $row['media'],
            'rigzhung'       => $row['rigzhung'],

        ]);
    }
}
