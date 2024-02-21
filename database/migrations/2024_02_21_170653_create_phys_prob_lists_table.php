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
        Schema::create('phys_prob_lists', function (Blueprint $table) {
            $table->id();
            $table->string('Workbook', 20);
            $table->integer('ProbNo');
            $table->string('Field', 20);
            $table->string('Class', 50);
            $table->integer('Level');
            $table->date('UsedDay');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('phys_prob_lists');
    }
};
