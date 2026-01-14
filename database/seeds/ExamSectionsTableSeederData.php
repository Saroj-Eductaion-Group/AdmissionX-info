<?php

use Illuminate\Database\Seeder;

class ExamSectionsTableSeederData extends Seeder
{
    public function run()
    {
        DB::statement('DELETE FROM exam_sections WHERE isShowOnHome = 1');
        
        $examSections = array(
            array('name' => 'Engineering', 'title' => 'Engineering Exams', 'status' => 1, 'slug' => 'engineering', 'functionalarea_id' => 1, 'isShowOnHome' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime),
            array('name' => 'Medical', 'title' => 'Medical Exams', 'status' => 1, 'slug' => 'medical', 'functionalarea_id' => 2, 'isShowOnHome' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime),
            array('name' => 'Architecture', 'title' => 'Architecture Exams', 'status' => 1, 'slug' => 'architecture', 'functionalarea_id' => 3, 'isShowOnHome' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime),
            array('name' => 'Computer Applications', 'title' => 'Computer Applications Exams', 'status' => 1, 'slug' => 'computer-applications', 'functionalarea_id' => 4, 'isShowOnHome' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime),
            array('name' => 'Law', 'title' => 'Law Exams', 'status' => 1, 'slug' => 'law', 'functionalarea_id' => 5, 'isShowOnHome' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime),
            array('name' => 'Management', 'title' => 'Management Exams', 'status' => 1, 'slug' => 'management', 'functionalarea_id' => 6, 'isShowOnHome' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime),
            array('name' => 'Pharmacy', 'title' => 'Pharmacy Exams', 'status' => 1, 'slug' => 'pharmacy', 'functionalarea_id' => 11, 'isShowOnHome' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime),
            array('name' => 'Design', 'title' => 'Design Exams', 'status' => 1, 'slug' => 'design', 'functionalarea_id' => 8, 'isShowOnHome' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime),
            array('name' => 'Agriculture', 'title' => 'Agriculture Exams', 'status' => 1, 'slug' => 'agriculture', 'functionalarea_id' => 9, 'isShowOnHome' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime),
            array('name' => 'Education & Languages', 'title' => 'Education & Languages Exams', 'status' => 1, 'slug' => 'education-languages', 'functionalarea_id' => 10, 'isShowOnHome' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime),
            array('name' => 'Arts', 'title' => 'Arts Exams', 'status' => 1, 'slug' => 'arts', 'functionalarea_id' => 12, 'isShowOnHome' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime),
            array('name' => 'Beauty & Healthcare', 'title' => 'Beauty & Healthcare Exams', 'status' => 1, 'slug' => 'beauty-healthcare', 'functionalarea_id' => 13, 'isShowOnHome' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime),
            array('name' => 'Commerce', 'title' => 'Commerce Exams', 'status' => 1, 'slug' => 'commerce', 'functionalarea_id' => 14, 'isShowOnHome' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime),
            array('name' => 'Dental', 'title' => 'Dental Exams', 'status' => 1, 'slug' => 'dental', 'functionalarea_id' => 15, 'isShowOnHome' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime),
            array('name' => 'Engineering and Management', 'title' => 'Engineering and Management Exams', 'status' => 1, 'slug' => 'engineering-management', 'functionalarea_id' => 16, 'isShowOnHome' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime),
            array('name' => 'Hotel Management', 'title' => 'Hotel Management Exams', 'status' => 1, 'slug' => 'hotel-management', 'functionalarea_id' => 17, 'isShowOnHome' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime),
            array('name' => 'Mass Communication & Media', 'title' => 'Mass Communication & Media Exams', 'status' => 1, 'slug' => 'mass-communication-media', 'functionalarea_id' => 18, 'isShowOnHome' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime),
            array('name' => 'Paramedical', 'title' => 'Paramedical Exams', 'status' => 1, 'slug' => 'paramedical', 'functionalarea_id' => 19, 'isShowOnHome' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime),
            array('name' => 'Science', 'title' => 'Science Exams', 'status' => 1, 'slug' => 'science', 'functionalarea_id' => 20, 'isShowOnHome' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime),
            array('name' => 'Veterinary Sciences', 'title' => 'Veterinary Sciences Exams', 'status' => 1, 'slug' => 'veterinary-sciences', 'functionalarea_id' => 21, 'isShowOnHome' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime),
        );

        DB::table('exam_sections')->insert($examSections);
    }
}
