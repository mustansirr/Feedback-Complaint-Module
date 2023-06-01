<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('_feedbackand_complaint', function (Blueprint $table) {
            $table->id('fc_id');
            $table->foreignId('user_id');
            $table->boolean('fc_type');
            $table->string('fc_to');
            $table->text('fc_description');
            $table->boolean('fc_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_feedbackand_complaint');
    }
};