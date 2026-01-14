<?php

use Illuminate\Database\Seeder;

class TypeOfExaminationsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('type_of_examinations')->delete();

        $engId = DB::table('exam_sections')->where('slug', 'engineering')->value('id');
        $medId = DB::table('exam_sections')->where('slug', 'medical')->value('id');
        $compId = DB::table('exam_sections')->where('slug', 'computer-applications')->value('id');
        $mgmtId = DB::table('exam_sections')->where('slug', 'management')->value('id');
        $agriId = DB::table('exam_sections')->where('slug', 'agriculture')->value('id');
        $eduId = DB::table('exam_sections')->where('slug', 'education-languages')->value('id');

        $examinations = array(
            array('sortname' => 'BBA', 'name' => 'Bachelor of Business Administration', 'status' => 1, 'slug' => 'bba', 'examsection_id' => $mgmtId, 'functionalarea_id' => 6, 'isShowOnHome' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime),
            array('sortname' => 'MBA', 'name' => 'Master of Business Administration', 'status' => 1, 'slug' => 'mba', 'examsection_id' => $mgmtId, 'functionalarea_id' => 6, 'isShowOnHome' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime),
            array('sortname' => 'JNU CEEB', 'name' => 'Jawaharlal Nehru University Combined Entrance Examination for Biotechnology', 'status' => 1, 'slug' => 'jnu-ceeb', 'examsection_id' => $engId, 'functionalarea_id' => 1, 'isShowOnHome' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime),
            array('sortname' => 'WB JECA', 'name' => 'West Bengal Joint Entrance for Diploma in Engineering', 'status' => 1, 'slug' => 'wb-jeca', 'examsection_id' => $engId, 'functionalarea_id' => 1, 'isShowOnHome' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime),
            array('sortname' => 'BCA', 'name' => 'Bachelor of Computer Applications', 'status' => 1, 'slug' => 'bca', 'examsection_id' => $compId, 'functionalarea_id' => 4, 'isShowOnHome' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime),
            array('sortname' => 'CAT', 'name' => 'Common Admission Test', 'status' => 1, 'slug' => 'cat', 'examsection_id' => $mgmtId, 'functionalarea_id' => 6, 'isShowOnHome' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime),
            array('sortname' => 'IPMAT', 'name' => 'Integrated Programme in Management Aptitude Test', 'status' => 1, 'slug' => 'ipmat', 'examsection_id' => $mgmtId, 'functionalarea_id' => 6, 'isShowOnHome' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime),
            array('sortname' => 'NPAT', 'name' => 'NMIMS Programs After Twelfth', 'status' => 1, 'slug' => 'npat', 'examsection_id' => $mgmtId, 'functionalarea_id' => 6, 'isShowOnHome' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime),
            array('sortname' => 'CUET', 'name' => 'Common University Entrance Test', 'status' => 1, 'slug' => 'cuet', 'examsection_id' => $engId, 'functionalarea_id' => 1, 'isShowOnHome' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime),
            array('sortname' => 'JEE Advanced', 'name' => 'Joint Entrance Examination Advanced', 'status' => 1, 'slug' => 'jee-advanced', 'examsection_id' => $engId, 'functionalarea_id' => 1, 'isShowOnHome' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime),
            array('sortname' => 'JEE Main', 'name' => 'Joint Entrance Examination Main', 'status' => 1, 'slug' => 'jee-main', 'examsection_id' => $engId, 'functionalarea_id' => 1, 'isShowOnHome' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime),
            array('sortname' => 'NEET UG', 'name' => 'National Eligibility cum Entrance Test', 'status' => 1, 'slug' => 'neet-ug', 'examsection_id' => $medId, 'functionalarea_id' => 2, 'isShowOnHome' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime),
            array('sortname' => 'IELTS', 'name' => 'International English Language Testing System', 'status' => 1, 'slug' => 'ielts', 'examsection_id' => $eduId, 'functionalarea_id' => 10, 'isShowOnHome' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime),
            array('sortname' => 'SET', 'name' => 'State Eligibility Test', 'status' => 1, 'slug' => 'set', 'examsection_id' => $eduId, 'functionalarea_id' => 10, 'isShowOnHome' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime),
            array('sortname' => 'OUAT', 'name' => 'Odisha University of Agriculture and Technology', 'status' => 1, 'slug' => 'ouat', 'examsection_id' => $agriId, 'functionalarea_id' => 9, 'isShowOnHome' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime),
            array('sortname' => 'LPUNEST', 'name' => 'Lovely Professional University National Eligibility and Scholarship Test', 'status' => 1, 'slug' => 'lpunest', 'examsection_id' => $engId, 'functionalarea_id' => 1, 'isShowOnHome' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime),
            array('sortname' => 'NEET-SS', 'name' => 'National Eligibility cum Entrance Test Super Speciality', 'status' => 1, 'slug' => 'neet-ss', 'examsection_id' => $medId, 'functionalarea_id' => 2, 'isShowOnHome' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime),
            array('sortname' => 'NIMCET', 'name' => 'NIT MCA Common Entrance Test', 'status' => 1, 'slug' => 'nimcet', 'examsection_id' => $compId, 'functionalarea_id' => 4, 'isShowOnHome' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime),
            array('sortname' => 'TISSNET', 'name' => 'Tata Institute of Social Sciences National Entrance Test', 'status' => 1, 'slug' => 'tissnet', 'examsection_id' => $mgmtId, 'functionalarea_id' => 6, 'isShowOnHome' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime),
            array('sortname' => 'TANCET', 'name' => 'Tamil Nadu Common Entrance Test', 'status' => 1, 'slug' => 'tancet', 'examsection_id' => $mgmtId, 'functionalarea_id' => 6, 'isShowOnHome' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime),
            array('sortname' => 'SNAP', 'name' => 'Symbiosis National Aptitude Test', 'status' => 1, 'slug' => 'snap', 'examsection_id' => $mgmtId, 'functionalarea_id' => 6, 'isShowOnHome' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime),
            array('sortname' => 'XAT', 'name' => 'Xavier Aptitude Test', 'status' => 1, 'slug' => 'xat', 'examsection_id' => $mgmtId, 'functionalarea_id' => 6, 'isShowOnHome' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime),
            array('sortname' => 'GMAT', 'name' => 'Graduate Management Admission Test', 'status' => 1, 'slug' => 'gmat', 'examsection_id' => $mgmtId, 'functionalarea_id' => 6, 'isShowOnHome' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime),
            array('sortname' => 'KEAM', 'name' => 'Kerala Engineering Architecture Medical', 'status' => 1, 'slug' => 'keam', 'examsection_id' => $engId, 'functionalarea_id' => 1, 'isShowOnHome' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime),
            array('sortname' => 'GATE', 'name' => 'Graduate Aptitude Test in Engineering', 'status' => 1, 'slug' => 'gate', 'examsection_id' => $engId, 'functionalarea_id' => 1, 'isShowOnHome' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime),
        );

        DB::table('type_of_examinations')->insert($examinations);
    }
}
