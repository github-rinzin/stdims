<?php

namespace App\Imports;

use App\Student;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class StudentImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $student_code = $row['student_code'];
        return new Student([
            'id'                        => $student_code,
            'code'                      => $student_code,
            'name'                      => $row['name'],
            'dob'                       => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['dob']),
            'age'                       => $row['age'],
            'cid'                       => $row['cid'],
            'name_of_previous_school'   => $row['name_of_previous_school'],
            'fathers_name'              => $row['fathers_name'],
            'fathers_contact'           => $row['fathers_contact'],
            'fathers_address'           => $row['fathers_address'],
            'mothers_name'              => $row['mothers_name'],
            'mothers_contact'           => $row['mothers_contact'],
            'mothers_address'           => $row['mothers_address'],
            'gurdian_name'              => $row['gurdian_name'],
            'gurdian_contact'           => $row['gurdian_contact'],
            'class_division_id'         => null,
            'user_id'                   => $student_code, 
            'role_id'                   => 3,   
        ]);
    }
}
