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
            $table->bigInteger('contact_type_id');
            $table->foreign('contact_type_id')->references('id')->on('contact_types')->onDelete('RESTRICT')->onUpdate('CASCADE');
            $table->bigInteger('spam_type_id');
            $table->foreign('spam_type_id')->references('id')->on('spam_types')->onDelete('RESTRICT')->onUpdate('CASCADE');
            $table->ipAddress('ip');
            $table->string('caller_name', 60)->nullable();
            $table->string('reported_name', 60);
            $table->string('description', 350);
            $table->smallInteger('grade');
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
