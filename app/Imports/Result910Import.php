<?php

namespace App\Imports;

use App\Result_9_10;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\Importable;

class Result910Import implements ToModel, WithHeadingRow 
{
    use Importable;
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Result_9_10([
            'student_id'    => $row['student_code'],
            'english'       => $row['english'],
            'dzongkha'      => $row['dzongkha'],
            'maths'	        => $row['maths'],
            'history'	    => $row['history'],
            'geography'	    => $row['geography'],
            'biology'       => $row['biology'],
            'physics'       => $row['physics'],
            'chemistry'     => $row['chemistry'],
            'ict'           => $row['ict'],
            'eco_it'        => $row['eco_it'],
        ]);
    }
}
