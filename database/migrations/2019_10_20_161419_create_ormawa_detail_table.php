<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrmawaDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ormawa_detail', function (Blueprint $table) {
            $table->string('ormawa_id',25)->index();
            $table
                ->foreign('ormawa_id')
                ->references('kd_ormawa')
                ->on('ormawa');
            $table->string('mahasiswa_id',25)->index();
            $table
                ->foreign('mahasiswa_id')
                ->references('nim')
                ->on('mahasiswa');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ormawa_detail');
    }
}
