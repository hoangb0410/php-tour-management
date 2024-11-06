<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('duration');
            $table->unsignedBigInteger('destination_id');
            $table->time('departure_time');
            $table->unsignedBigInteger('type_id');
            $table->integer('number_of_guest');
            $table->integer('price');
            $table->float('rating');
            $table->text('overview');
            $table->text('inclusion');
            $table->text('additional_info');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tours');
    }
};
