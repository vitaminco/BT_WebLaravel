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
        Schema::create('san_phams', function (Blueprint $table) {
            $table->id();
            $table->string("ten_san_pham", 200)->nullable();
            $table->decimal("gia", 20, 0)->nullable();
            $table->text("mo_ta")->nullable();
            $table->string("anh_cover", 500)->nullable();
            $table->text("so_luong_ton")->nullable();
            $table->bigInteger("id_nguoi_tao")
                ->index("idx_san_phams_id_nguoi_tao")
                ->nullable();
            $table->bigInteger("id_danh_muc")
                ->index("idx_san_phams_id_danh_muc")
                ->nullable();
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('san_phams');
    }
};
