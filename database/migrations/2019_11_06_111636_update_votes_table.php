<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateVotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('votes', function (Blueprint $table) {
        $table->integer('voter_id');
        $table->integer('candidate_id');
        $table->dropColumn('Votes');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('votes', function (Blueprint $table) {
        $table->dropdown('voter_id');
        $table->dropdown('candidate_id');
        $table->string('Votes');
      });
    }
}
