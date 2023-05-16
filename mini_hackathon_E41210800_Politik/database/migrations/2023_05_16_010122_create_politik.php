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
        Schema::create('politik', function (Blueprint $table) {
            $table->bigIncrements('id_caleg');
            $table->string('nama_caleg');
            $table->string('nama_partai');
            $table->string('jumlah_suara');
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
        Schema::dropIfExists('politik');
    }
};

//disini adalah untuk tempat migrate database