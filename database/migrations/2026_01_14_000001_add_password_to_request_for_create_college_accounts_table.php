<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPasswordToRequestForCreateCollegeAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('request_for_create_college_accounts', function (Blueprint $table) {
            $table->string('password')->nullable()->after('contactPersonName');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('request_for_create_college_accounts', function (Blueprint $table) {
            $table->dropColumn('password');
        });
    }
}
