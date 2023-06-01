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
        Schema::table('users', function (Blueprint $table) {
            $table->id('user_id')->first();
            $table->string('username')->after('user_id');
            $table->string('password')->after('username');
            $table->boolean('user_type')->after('password');
            $table->text('firstName')->after('user_type');
            $table->text('middleName')->after('firstName');
            $table->text('lastName')->after('middleName');
            $table->integer('phone')->after('lastName');
            $table->string('email')->after('phone');
            $table->string('address')->after('email');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};