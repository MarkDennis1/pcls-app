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
        Schema::create('transacts', function (Blueprint $table) {
            $table->id();
            $table->string('processed_by');
            $table->string('name');
            $table->longText('clothe_types');
            $table->integer('weight');
            $table->integer('total');
            $table->enum('status', ['Pending', 'Claimed'])->default('Pending');
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
        Schema::dropIfExists('transacts');
    }
};
