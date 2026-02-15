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
        Schema::create('leadds', function (Blueprint $table) {
            $table->id();

            $table->unsignedSmallInteger('account_id');
            $table->unsignedInteger('organisation_id')->nullable();
            $table->unsignedInteger('team_id')->nullable();

            $table->string('activity', 70)->nullable();
            $table->string('status', 20)->nullable();

            $table->enum('gender', ['male', 'female'])->nullable();

            $table->string('firstname', 20)->nullable();
            $table->string('lastname', 20)->nullable();

            $table->string('postcode', 6)->nullable();
            $table->string('housenumber', 5)->nullable();
            $table->string('suffix', 6)->nullable();

            $table->string('streetname', 80)->nullable();
            $table->string('city', 80)->nullable();
            $table->string('country', 2)->nullable();

            $table->date('birthdate')->nullable();

            $table->string('email', 120)->nullable();
            $table->string('phone', 15)->nullable();

            $table->enum('business', ['0', '1'])->default('0');

            $table->string('company_name', 120)->nullable();
            $table->string('contact_person', 20)->nullable();

            $table->text('data')->nullable();
            $table->text('attachments')->nullable();
            $table->text('history')->nullable();

            $table->unsignedInteger('created_by')->nullable();
            $table->string('created_ip', 45)->nullable();

            $table->unsignedInteger('planned_user_id')->nullable();
            $table->unsignedInteger('planned_by')->nullable();

            $table->timestamp('planned_at')->nullable();
            $table->timestamp('planned_from')->nullable();
            $table->timestamp('planned_to')->nullable();

            $table->smallInteger('planned_duration')->nullable();

            $table->timestamp('completed_at')->nullable();
            $table->unsignedInteger('completed_team_id')->nullable();
            $table->unsignedInteger('completed_by')->nullable();

            $table->timestamp('started_at')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leadds');
    }
};
