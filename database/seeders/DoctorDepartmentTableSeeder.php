<?php

namespace Database\Seeders;

use App\Models\DoctorDepartment;
use Illuminate\Database\Seeder;

class DoctorDepartmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $input = [
            [
                'title' => 'Workout',
            ],
            [
                'title' => 'Yoga',
            ],
            [
                'title' => 'Gymnastic',
            ],
            [
                'title' => 'Weight Lifting',
            ],
            [
                'title' => 'Running',
            ],
            [
                'title' => 'Exercise',
            ],
        ];

        foreach ($input as $data) {
            DoctorDepartment::create($data);
        }
    }
}
