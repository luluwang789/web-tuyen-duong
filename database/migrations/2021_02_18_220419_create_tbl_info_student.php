<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblInfoStudent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_info_student', function (Blueprint $table) {
            $table->Increments('id_student');
            $table->string('code_student'); //mã số sinh viên
            $table->string('name_student'); //họ và tên 
            $table->date('year_student'); //năm sinh
            $table->string('class_student'); //lớp hoặc khóa học
            $table->string('email_student'); //email
            $table->string('type_student'); // học lực loại
            $table->string('position_student'); //chức vụ 
            $table->string('achievement_student'); //thành tích 
            $table->integer('status_student'); // 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_info_student');
    }
}
