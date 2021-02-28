<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblDonvi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_donvi', function (Blueprint $table) {
            $table->Increments('id_unit');
            $table->string('name_unit'); // tên đơn vị
            $table->string('address_unit'); // đia chỉ đơn vị
            $table->string('email_unit'); // email đơn vị
            $table->string('phone_unit'); // số điện thoại đơn vị
            $table->string('base_group_number_unit'); // Số lượng đoàn cơ sở
            $table->string('number_of_member_unit'); // Số lượng đoàn viên
            $table->string('name_manager_member_unit'); // Tên cán bộ phụ trách
            $table->string('phone_manager_member_unit'); // Số điện thoại cán bộ phụ trách
            $table->string('email_manager_member_unit'); // email cán bộ phụ trách
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
        Schema::dropIfExists('tbl_donvi');
    }
}
