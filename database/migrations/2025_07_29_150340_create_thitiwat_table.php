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
        Schema::create('thitiwat', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->integer('Age')->nullable();
            $table->float('weight')->nullable();
            $table->string('Name')->nullable();
            $table->date('Birth_of_Date')->nullable();
            $table->text('Bio')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('thitiwat');
    }
};
