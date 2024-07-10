<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\student;
// use Illuminate\Support\Facades\json\File;
use Illuminate\Support\Facades\File;



class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
     {
        // fake data inserted 

        for ($i=1;  $i < 10; $i++) { 
            # code...
            student::create([
                'name' => fake()->name(),
                'email' =>fake()->unique()->email()
            ]);

        }
        // end fake data inserted


    //     first step : crreate json file 
    //     second step : connect with Studentseeder file 
    //     thired step : json decode
    //     fouth step : create function use 
    //     finally cal dataaseSeeder file create function 

    //  $json = File::get(path:'database/json/students.json');

    //  $students = collect(json_decode($json));

    //     $students->each(function ($student){
             
    //     student::create([
    //         'name'  => $student->name,
    //         'email' => $student->email
    //     ]);

            // student::insert($student);   //first class name and seconde insert after variable use 

        // });

        //   simple data insert in database 
        //
        // student::create([
        //     'name'  => 'baseer Ahhmed',
        //     'email' => 'baseerahmedtunio'
        // ]);
    }
}
