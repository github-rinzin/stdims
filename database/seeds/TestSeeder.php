<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Role;
use App\Division;
use App\Grade;
use App\ClassDivision;
use App\Teacher;
use App\Student;
use App\Address;
use App\Stream;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'id' => 1,
            'name' => 'admin',
        ]);
        Role::create([
            'id' => 2,
            'name' => 'teacher',
        ]);
        Role::create([
            'id' => 3,
            'name' => 'student',
        ]);
        User::create([
            'id' => '1',
            'name' => 'admin',
            'email' => 'admin@sms.edu',
            'password' => Hash::make('password'),
            'role_id' => '1'
        ]);
        Stream::create([
            'id' => 1,
            'name' => 'science'
        ]);
        Stream::create([
            'id' => 2,
            'name' => 'commerce'
        ]);
        Stream::create([
            'id' => 3,
            'name' => 'arts'
        ]);
    }
}
