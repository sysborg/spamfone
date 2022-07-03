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
        Schema::create('reported_data', function (Blueprint $table) {
            $table->id();
            $table->timestampsTz();
            $table->string('repoted_data', 300);
            $table->bigInteger('country_id');
            $table->bigInteger('contact_type_id');
            $table->bigInteger('avg_grade')->nullable();
            $table->foreign('country_id')->references('id')->on('countries')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('contact_type_id')->references('id')->on('contact_types')->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reported_data');
    }
};
