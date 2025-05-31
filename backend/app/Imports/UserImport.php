<?php

namespace App\Imports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UserImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new User([
            'firstname' => $row['firstname'],
            'middlename' => $row['middlename'],
            'lastname' => $row['lastname'],
            'age' => $row['age'],
            'gender' => $row['gender'],
            'contact' => $row['contact'],
            'address' => $row['address'],
            'role_id' => 3,
            'email' => $row['email'],
            'password' => bcrypt($row['password']),
        ]);
    }
}
