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
        Schema::create('bang_gias', function (Blueprint $table) {
            $table->id();
            $table->string("doi_tuong", 200)->nullable();
            $table->decimal("gia_giam", 20, 0)->nullable();
            $table->text("loai_sp")->nullable();
            $table->string("anh_cover", 500)->nullable();
            $table->text("mo_ta")->nullable();
            $table->text("ghi_chu")->nullable();
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
        Schema::dropIfExists('bang_gias');
    }
};
