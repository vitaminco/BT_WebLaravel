<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('danh_mucs', function (Blueprint $table) {
            $table->id();
            $table->string("ten_danh_muc", 200)->nullable();
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('danh_mucs');
    }
};
