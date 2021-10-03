<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUniversityCourseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('universities', function (Blueprint $table) {
        //     $table->engine = 'InnoDB';
        //     $table->bigIncrements('id');
        //     $table->string('name');
        //     $table->mediumText('description');
        //     $table->string('country_code', 2);
        //     $table->string('photo');
        //     $table->unsignedBigInteger('created_by');
        //     $table->timestamps();
        // });

        // Schema::table('countries', function($table){
        //     $table->unique('country_code')->index();
        // });

        // Schema::table('universities', function($table){
        //     $table->foreign('created_by')->references("id")->on("users")->onDelete("cascade");
        //     $table->foreign('country_code')->references("code")->on("countries")->onDelete("cascade");
        // });

        Schema::create('courses', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('title');
            $table->mediumText('description');
            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('uni_id');
            $table->timestamps();
            $table->foreign('created_by')->references("id")->on("users")->onDelete("cascade");
            $table->foreign('uni_id')->references("id")->on("universities")->onDelete("cascade");
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('university_course');
    }
}
