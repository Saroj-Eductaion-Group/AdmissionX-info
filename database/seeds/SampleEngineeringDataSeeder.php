<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SampleEngineeringDataSeeder extends Seeder
{
    public function run()
    {
        $now = Carbon::now();
        
        // 1. Insert Functional Area (Engineering)
        $engineeringId = DB::table('functionalarea')->insertGetId([
            'name' => 'Engineering',
            'pagetitle' => 'Engineering Colleges in India',
            'pagedescription' => 'Find best engineering colleges in India',
            'pageslug' => 'engineering',
            'isShowOnTop' => 1,
            'isShowOnHome' => 1,
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        // 2. Insert Degrees
        $degrees = [
            ['name' => 'BE/B.Tech', 'slug' => 'be-btech'],
            ['name' => 'ME/M.Tech', 'slug' => 'me-mtech'],
            ['name' => 'Diploma', 'slug' => 'diploma'],
            ['name' => 'B.Arch', 'slug' => 'b-arch'],
        ];

        $degreeIds = [];
        foreach ($degrees as $degree) {
            $degreeIds[$degree['name']] = DB::table('degree')->insertGetId([
                'name' => $degree['name'],
                'functionalarea_id' => $engineeringId,
                'pagetitle' => $degree['name'] . ' Colleges',
                'pagedescription' => 'Best ' . $degree['name'] . ' colleges in India',
                'pageslug' => $degree['slug'],
                'isShowOnTop' => 1,
                'isShowOnHome' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ]);
        }

        // 3. Insert Courses
        $courses = [
            ['name' => 'Computer Science Engineering', 'degree' => 'BE/B.Tech', 'slug' => 'computer-science-engineering'],
            ['name' => 'Civil Engineering', 'degree' => 'BE/B.Tech', 'slug' => 'civil-engineering'],
            ['name' => 'Mechanical Engineering', 'degree' => 'BE/B.Tech', 'slug' => 'mechanical-engineering'],
            ['name' => 'Electrical Engineering', 'degree' => 'BE/B.Tech', 'slug' => 'electrical-engineering'],
            ['name' => 'Electronics & Communication', 'degree' => 'BE/B.Tech', 'slug' => 'electronics-communication'],
        ];

        $courseIds = [];
        foreach ($courses as $course) {
            $courseIds[$course['name']] = DB::table('course')->insertGetId([
                'name' => $course['name'],
                'degree_id' => $degreeIds[$course['degree']],
                'pagetitle' => $course['name'] . ' Colleges',
                'pagedescription' => 'Top ' . $course['name'] . ' colleges',
                'pageslug' => $course['slug'],
                'isShowOnTop' => 1,
                'isShowOnHome' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ]);
        }

        // 4. Insert Sample Users (Colleges)
        $colleges = [
            ['name' => 'IIT Delhi', 'email' => 'admin@iitd.ac.in', 'city' => 'Delhi'],
            ['name' => 'IIT Bombay', 'email' => 'admin@iitb.ac.in', 'city' => 'Mumbai'],
            ['name' => 'NIT Trichy', 'email' => 'admin@nitt.edu', 'city' => 'Trichy'],
            ['name' => 'BITS Pilani', 'email' => 'admin@bits-pilani.ac.in', 'city' => 'Pilani'],
            ['name' => 'VIT Vellore', 'email' => 'admin@vit.ac.in', 'city' => 'Vellore'],
        ];

        foreach ($colleges as $college) {
            $userId = DB::table('users')->insertGetId([
                'suffix' => 'Dr.',
                'firstname' => $college['name'],
                'middlename' => '',
                'lastname' => '',
                'phone' => '9876543210',
                'email' => $college['email'],
                'password' => bcrypt('password'),
                'token' => substr(md5(uniqid(rand(), true)), 0, 60),
                'userstatus_id' => 16,
                'userrole_id' => 14,
                'is_emailSent' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ]);

            // 5. Insert College Profile
            DB::table('collegeprofile')->insert([
                'users_id' => $userId,
                'description' => $college['name'] . ' is one of the premier engineering institutes in India.',
                'estyear' => '1960',
                'website' => 'www.' . strtolower(str_replace(' ', '', $college['name'])) . '.ac.in',
                'collegecode' => strtoupper(substr($college['name'], 0, 3)) . '001',
                'contactpersonname' => 'Admin',
                'contactpersonemail' => $college['email'],
                'contactpersonnumber' => '9876543210',
                'review' => 1,
                'agreement' => 1,
                'verified' => 1,
                'calenderinfo' => 'Academic year starts in July',
                'approvedBy' => 'AICTE',
                'slug' => strtolower(str_replace(' ', '-', $college['name'])),
                'facebookurl' => '',
                'twitterurl' => '',
                'advertisement' => 0,
                'isShowOnTop' => 1,
                'isShowOnHome' => 1,
                'registeredSortAddress' => $college['city'],
                'registeredFullAddress' => $college['city'] . ', India',
                'campusSortAddress' => $college['city'],
                'campusFullAddress' => $college['city'] . ', India',
                'mediumOfInstruction' => 'English',
                'studyForm' => 'Full Time',
                'CCTVSurveillance' => 1,
                'totalStudent' => '5000',
                'ACCampus' => 1,
                'rating' => 4.5,
                'totalRatingUser' => 100,
                'created_at' => $now,
                'updated_at' => $now,
            ]);

            // 6. Insert College Logo
            DB::table('gallery')->insert([
                'users_id' => $userId,
                'name' => $college['name'] . ' Logo',
                'fullimage' => 'default-college-logo.png',
                'caption' => $college['name'],
                'width' => '200',
                'height' => '200',
                'misc' => 'college-logo-img',
                'created_at' => $now,
                'updated_at' => $now,
            ]);
        }

        echo "Sample Engineering data created successfully!\n";
        echo "- 1 Functional Area (Engineering)\n";
        echo "- 4 Degrees (BE/B.Tech, ME/M.Tech, Diploma, B.Arch)\n";
        echo "- 5 Courses (CSE, Civil, Mechanical, Electrical, ECE)\n";
        echo "- 5 Colleges (IIT Delhi, IIT Bombay, NIT Trichy, BITS Pilani, VIT Vellore)\n";
    }
}
