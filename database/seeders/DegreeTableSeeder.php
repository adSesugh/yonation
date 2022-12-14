<?php

namespace Database\Seeders;

use App\Models\Degree;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DegreeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Degree::truncate();

        $data = [
            'First School Leaving Certificate',
            "O'level WEAC/NECO",
            'OND',
            'HND',
            'Associate Degree',
            "Bachelor's Degree",
            'Masters Degree',
            'Graduate Certificate',
            'Doctorate Degree',
            'No Basic Education'
        ];

        foreach ($data as $key => $value) {
            Degree::create([
                'name'  =>  $value
            ]);
        }
    }
}
