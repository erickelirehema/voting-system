<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddHasVotedToVotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::table('votes', function (Blueprint $table) {
              $table->boolean('has_voted')->default(0);
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
           $table->dropColumn('has_voted');
         });
     }
}
