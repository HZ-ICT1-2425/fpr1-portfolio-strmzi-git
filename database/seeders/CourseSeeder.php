<?php

namespace Database\Seeders;

use App\Models\CourseModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $courses = [
            [
                "cu_code" => "CU75001V3",
                "name" => "Program- & Career Orientation",
                "credits" => 2.5,
                "passed_at" => "2024-10-18 00:00:00"
            ],
            [
                "cu_code" => "CU75003V1",
                "name" => "Programming Basics",
                "credits" => 5,
                "passed_at" => "2024-12-12 00:00:00"
            ],
            [
                "cu_code" => "CU75002V2",
                "name" => "Computer Science Basics",
                "credits" => 5,
                "passed_at" => "2024-12-13 00:00:00"
            ],
            [
                "cu_code" => "CU75004V1",
                "name" => "Object-Oriented Programming",
                "credits" => 10,
                "passed_at" => "2025-02-11 00:00:00"
            ],
            [
                "cu_code" => "CU75080V2",
                "name" => "Framework Project 1",
                "credits" => 10,
                "passed_at" => null
            ],
            [
                "cu_code" => "CU75011V3",
                "name" => "Framework Project 2",
                "credits" => 10,
                "passed_at" => null
            ],
            [
                "cu_code" => "CU75081V1",
                "name" => "Business IT Consultancy Basics",
                "credits" => 2.5,
                "passed_at" => null
            ],
            [
                "cu_code" => "CU75068V3",
                "name" => "Personal Professional Development Exploration",
                "credits" => 12.5,
                "passed_at" => null
            ],
            [
                "cu_code" => "CU75056V1",
                "name" => "IT Personality 1",
                "credits" => 1.25,
                "passed_at" => null
            ],
            [
                "cu_code" => "CU75056V1",
                "name" => "T Personality 2",
                "credits" => 1.25,
                "passed_at" => null
            ],
            [
                "cu_code" => "CU75055V1",
                "name" => "IT Personality International week",
                "credits" => 1.25,
                "passed_at" => null
            ],
            [
                "cu_code" => "CU75054V1",
                "name" => "IT Personality Project week",
                "credits" => 1.25,
                "passed_at" => null
            ],
            [
                "cu_code" => "CU75081V1",
                "name" => "Business IT Consultancy Basics",
                "credits" => 2.5,
                "passed_at" => null
            ],
        ];


        foreach ($courses as $course) {
            CourseModel::create($course);
        }
    }
}
