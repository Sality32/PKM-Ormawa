<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProposalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proposal', function (Blueprint $table) {
            $table->string('id_proposal',25)->primary();
            $table->string('jdl_kegiatan',255);
            $table->longText('desk_kegiatan',255);
            $table->integer('dana_kegiatan');
            $table->string('ketuplak_kegiatan',255);
            $table->date('tgl_kegiatan');
            $table->string('ormawa_kd',25);
            $table->longText('revisi_proposal');
            $table->string('status_proposal',10);
            $table->date('created_at');
            $table->date('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proposal');
    }
}
