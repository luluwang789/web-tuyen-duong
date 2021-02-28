<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblNomination extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_nomination', function (Blueprint $table) {
            $table->Increments('id_nomination');
            $table->string('year_nomination'); //năm đề cử - lấy từ year
            $table->string('name_nomination'); //họ và tên - lấy từ info_student
            $table->string('type_nomination'); //loại ??? :))) - lấy từ info_student
            $table->string('position_nomination'); //chức vụ - lấy từ info_student
            $table->string('achievement_nomination'); //thành tích - lấy từ info_student
            $table->string('title_nomination'); //đề cử danh hiệu - lấy từ title
            $table->string('form_nomination'); //hình thức khen thưởng - lấy từ form
            $table->string('unit_nomination'); //đơn vị duyệt
            $table->string('account_create_nomination'); //tài khoản tạo - lấy từ account
            $table->string('file_nomination');    
            $table->integer('status_nomination'); // đã duyệt và đang chờ duyệt
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
        Schema::dropIfExists('tbl_nomination');
    }
}
