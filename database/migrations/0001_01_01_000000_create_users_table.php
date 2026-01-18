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
        Schema::create('users', function (Blueprint $table) {
            $table->id();

            $table->string('user_code')->unique(); // e.g. ST001, AD001, CU001
            $table->string('name');  // firstname, lastname
            $table->string('email')->unique();     // unique email
            $table->string('username')->unique()->nullable();  // unique username 

            $table->string('password')->nullable();
            // nullable → required for social login users

            $table->boolean('is_newsletter_subscribed')->default(false);

            $table->enum('status', [
                'active',
                'inactive',
                'blocked'
            ])->default('active');

            $table->string('profile_photo')->nullable();
            $table->string('provider'); // google, facebook, github
            $table->string('provider_user_id');            
            
            $table->timestamp('last_login')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            
            // Remember Me functionality
            $table->rememberToken();
            
            $table->timestamps();
            
            $table->unique(['provider', 'provider_user_id']);
        });


        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
