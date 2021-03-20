<?php

namespace App\Imports;

use App\Address;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class AddressImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Address([
            'student_id'    => $row['student_code'],
            'house_number'  => $row['house_number'],
            'thram_number'  => $row['thram_number'],
            'village'       => $row['village'],
            'gewog'         => $row['gewog'],
            'dzongkhag'     => $row['dzongkhag'],
        ]);
    }
}
