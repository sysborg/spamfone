<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Artisan;
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
        Schema::create('spam_types', function (Blueprint $table) {
            $table->id();
            $table->timestampsTz();
            $table->string('type', 150);
            $table->boolean('active');
        });

        Artisan::call('db:seed', [
            '--class' => 'SpamTypeSeeder',
            '--force' => true
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('spam_types');
    }
};
