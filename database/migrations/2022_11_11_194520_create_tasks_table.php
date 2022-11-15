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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('board_id')->constrained();
            $table->foreignId('owner_id')->constrained('users');
            $table->foreignId('holder_id')->constrained('users');
            $table->json('viewers_ids')->nullable();
            $table->string('name', 128);
            $table->string('description', 400)->nullable();
            $table->string('type', 64)->nullable();
            $table->string('status', 64)->nullable();
            $table->string('due_date', 128)->nullable();
            $table->string('label', 64)->nullable();
            $table->json('logs')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
};
