<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('cau_hinhs', function (Blueprint $table) {
            $table->id();
            $table->string("ten_cong_ty", 200)->nullable();
            $table->text("so_dt_tu_van")->nullable();
            $table->string('email')->unique();
            $table->text("dia_chi")->nullable();
            $table->string("logo", 500)->nullable();
            $table->text("ghi_chu")->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cau_hinhs');
    }
};
