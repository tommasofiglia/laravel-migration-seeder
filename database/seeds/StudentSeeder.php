<?php

use App\Student;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $students = [
          [
            "name" => 'Giuseppino',
            "lastname" => 'Sbarazzino',
            "age" => 24,
            "email" => 'studente@scuola.it',
            "classname" => '3B'
          ],
          [
            "name" => 'Tommasino',
            "lastname" => 'Chebell',
            "age" => 29,
            "email" => 'studente2@scuola.it',
            "classname" => '2A'
          ],
          [
            "name" => 'Valeria',
            "lastname" => 'Bombardieri',
            "age" => 25,
            "email" => 'studente3@scuola.it',
            "classname" => '4H'
          ],
          [
            "name" => 'Mariapia',
            "lastname" => 'Gianguzzi',
            "age" => 31,
            "email" => 'upaddu@siccu.bpg',
            "classname" => '5E'
          ]
        ];

        foreach ($students as $student) {
          $newStudent = new Student();
          $newStudent->name = $student['name'];
          $newStudent->lastname = $student['lastname'];
          $newStudent->age = $student['age'];
          $newStudent->email = $student['email'];
          $newStudent->classname = $student['classname'];
          $newStudent->save();
        };
    }
}
