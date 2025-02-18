<?php

namespace Database\Seeders;

use App\Models\TestModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tests = [
            [
                "course_id" => 1,
                "name" => "Program & Career Orientation",
                "weighting_factor" => 1,
                "best_grade" => 9.8
            ],
            [
                "course_id" => 2,
                "name" => "Programming basics",
                "weighting_factor" => 1,
                "best_grade" => 7.2
            ],
            [
                "course_id" => 3,
                "name" => "Computer Science Basics",
                "weighting_factor" => 1,
                "best_grade" => 8.2
            ],
            [
                "course_id" => 4,
                "name" => "Object-Oriented Programming",
                "weighting_factor" => 0.5,
                "best_grade" => 9.1
            ],
            [
                "course_id" => 4,
                "name" => "Object Oriented Programming",
                "weighting_factor" => 1,
                "best_grade" => 6.5
            ],
            [
                "course_id" => 5,
                "name" => "Framework Project 1",
                "weighting_factor" => 1,
                "best_grade" => null
            ],
            [
                "course_id" => 5,
                "name" => "Framework Project 1",
                "weighting_factor" => 1,
                "best_grade" => null
            ],
            [
                "course_id" => 5,
                "name" => "Framework Project 1",
                "weighting_factor" => 1,
                "best_grade" => null
            ],
            [
                "course_id" => 5,
                "name" => "Framework Project 1",
                "weighting_factor" => 1,
                "best_grade" => null
            ],
            [
                "course_id" => 6,
                "name" => "Framework Project 2",
                "weighting_factor" => 1,
                "best_grade" => null
            ],
            [
                "course_id" => 6,
                "name" => "Framework Project 2",
                "weighting_factor" => 1,
                "best_grade" => null
            ],
            [
                "course_id" => 6,
                "name" => "Framework Project 2",
                "weighting_factor" => 1,
                "best_grade" => null
            ],
            [
                "course_id" => 7,
                "name" => "Business IT Consultancy Basics",
                "weighting_factor" => 1,
                "best_grade" => null
            ],
            [
                "course_id" => 8,
                "name" => "Personal Professional Development Experience",
                "weighting_factor" => 1,
                "best_grade" => null
            ],
            [
                "course_id" => 9,
                "name" => "IT Personality",
                "weighting_factor" => 1,
                "best_grade" => null
            ],
            [
                "course_id" => 9,
                "name" => "IT Personality",
                "weighting_factor" => 1,
                "best_grade" => null
            ],
        ];

        foreach ($tests as $test) {
            TestModel::create($test);
        }
    }
}
