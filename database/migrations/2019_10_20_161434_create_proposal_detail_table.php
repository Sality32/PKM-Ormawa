<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProposalDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proposal_detail', function (Blueprint $table) {
            $table->string('ormawa_id',25)->index();
            $table
                ->foreign('ormawa_id')
                ->references('kd_ormawa')
                ->on('ormawa');
            $table->string('proposal_id',25)->index();
            $table
                ->foreign('proposal_id')
                ->references('id_proposal')
                ->on('proposal')
                ->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proposal_detail');
    }
}
