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
        //adds column for cellphone number and email
        Schema::table('reported_spam', function(Blueprint $table){
            $table->string('cell', 20)->nullable();
            $table->string('email', 150)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //removes columns added on this migration
        Schema::table('reported_spam', function(Blueprint $table){
            $table->dropColumn('cell');
            $table->dropColumn('email');
        });
    }
};
