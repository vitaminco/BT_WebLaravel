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
        Schema::create('dong_gops', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("id_users")
                ->index("id_dong_gops_id_users")
                ->nullable();
            $table->bigInteger("id_san_phams")
                ->index("id_dong_gops_id_san_phams")
                ->nullable();
            $table->text("mo_ta")->nullable();
            $table->string("anh_comments", 500)->nullable();
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
        Schema::dropIfExists('dong_gops');
    }
};
