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
        Schema::create('reported_spam', function (Blueprint $table) {
            $table->id();
            $table->timestampsTz();
            $table->bigInteger('spam_type_id');
            $table->bigInteger('reported_data_id');
            $table->ipAddress('ip');
            $table->string('reported_name', 60);
            $table->string('whistleblower_name', 60);
            $table->string('comment', 350);
            $table->bigInteger('grade');
            $table->foreign('spam_type_id')->references('id')->on('spam_types')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('reported_data_id')->references('id')->on('reported_data')->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reported_spam');
    }
};
