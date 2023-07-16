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
        Schema::create('mua_san_phams', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text("dia_chi")->nullable();
            $table->decimal("so_dt", 10, 0)->nullable();

            $table->bigInteger("id_san_pham")
                ->index("id_mua_san_pham_id_san_pham")
                ->nullable();
            $table->decimal("gia", 20, 0)->nullable();
            $table->text("mo_ta")->nullable();
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
        Schema::dropIfExists('mua_san_phams');
    }
};
