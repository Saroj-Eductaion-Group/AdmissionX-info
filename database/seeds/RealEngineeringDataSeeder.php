<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RealEngineeringDataSeeder extends Seeder
{
    public function run()
    {
        // Ensure Engineering functional area exists with id=1
        DB::table('functionalarea')->updateOrInsert(
            ['id' => 1],
            ['name' => 'Engineering', 'pageslug' => 'engineering', 'created_at' => now(), 'updated_at' => now()]
        );

        // Degrees
        $degrees = [
            ['id' => 1, 'name' => 'BE/B.Tech', 'pageslug' => 'be-btech'],
            ['id' => 2, 'name' => 'ME/M.Tech', 'pageslug' => 'me-mtech'],
            ['id' => 3, 'name' => 'Diploma Courses', 'pageslug' => 'diploma-courses'],
            ['id' => 5, 'name' => 'Bsc', 'pageslug' => 'bsc'],
            ['id' => 6, 'name' => 'Msc', 'pageslug' => 'msc'],
            ['id' => 7, 'name' => 'Certificate Course', 'pageslug' => 'certificate-course'],
            ['id' => 8, 'name' => 'Bachelor Degree', 'pageslug' => 'bachelor-degree'],
            ['id' => 9, 'name' => 'Master Degree', 'pageslug' => 'master-degree'],
            ['id' => 10, 'name' => 'Associate of Engineering', 'pageslug' => 'associate-of-engineering'],
        ];

        foreach ($degrees as $degree) {
            DB::table('degree')->updateOrInsert(
                ['id' => $degree['id']],
                array_merge($degree, ['functionalarea_id' => 1, 'created_at' => now(), 'updated_at' => now()])
            );
        }

        // Courses (College Lists)
        $courses = [
            ['name' => 'Civil Engineering', 'pageslug' => 'civil-engineering', 'degree_id' => 1],
            ['name' => 'Computer Science and Engineering', 'pageslug' => 'computer-science-and-engineering', 'degree_id' => 1],
            ['name' => 'Electrical Engineering', 'pageslug' => 'electrical-engineering', 'degree_id' => 1],
            ['name' => 'Electronics Engineering', 'pageslug' => 'electronics-engineering', 'degree_id' => 1],
            ['name' => 'Chemical Engineering', 'pageslug' => 'chemical-engineering', 'degree_id' => 1],
            ['name' => 'Aerospace Engineering', 'pageslug' => 'aerospace-engineering', 'degree_id' => 1],
            ['name' => 'Computer Science and Software Engineering', 'pageslug' => 'computer-science-and-software-engineering', 'degree_id' => 1],
            ['name' => 'Biotechnology Engineering', 'pageslug' => 'biotechnology-engineering', 'degree_id' => 1],
            ['name' => 'Geology and Geophysics Engineering', 'pageslug' => 'geology-and-geophysics-engineering', 'degree_id' => 1],
            ['name' => 'Ecology and Evolution Engineering', 'pageslug' => 'ecology-and-evolution-engineering', 'degree_id' => 1],
            ['name' => 'Electronics & Communication', 'pageslug' => 'electronics-communication', 'degree_id' => 1],
            ['name' => 'Mechanical Engineering', 'pageslug' => 'mechanical-engineering', 'degree_id' => 1],
        ];

        foreach ($courses as $course) {
            DB::table('course')->insert(array_merge($course, ['created_at' => now(), 'updated_at' => now()]));
        }

        echo "Real Engineering data seeded successfully!\n";
        echo "- 9 Degrees added\n";
        echo "- 12 Courses added\n";
    }
}
