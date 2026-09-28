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
        // 1. Categories
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('icon')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
        });

        // 2. Skills
        Schema::create('skills', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->nullable()->constrained('categories')->nullOnDelete();
            $table->string('name')->unique();
            $table->string('slug')->unique();
            $table->timestamps();
        });

        // 3. Talent Applications
        Schema::create('talent_applications', function (Blueprint $table) {
            $table->id();
            $table->string('reference')->unique(); // e.g. TC-2026-0001
            $table->foreignId('user_id')->nullable()->constrained('users')->nullOnDelete();
            
            // Étape 1 : Informations personnelles
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->index();
            $table->string('phone');
            $table->string('city');
            $table->string('age_range')->nullable();
            $table->string('profile_photo_path')->nullable();
            $table->string('linkedin_url')->nullable();
            $table->string('instagram_url')->nullable();
            $table->string('facebook_url')->nullable();
            $table->string('twitter_url')->nullable();
            $table->string('website_url')->nullable();

            // Étape 2 : Profil professionnel
            $table->string('primary_activity');
            $table->string('current_status');
            $table->string('experience_duration');

            // Étape 3 : Réalisations
            $table->text('featured_achievement');

            // Étape 4 : Expérience en ligne (Privé / Interne)
            $table->string('has_online_earnings')->default('non'); // oui, non, prefer_not_to_say
            $table->string('online_activity_type')->nullable();
            $table->string('approximate_earnings')->nullable();
            $table->text('current_main_activity');
            $table->text('current_challenge');

            // Étape 5 : Objectifs et opportunités
            $table->json('reasons_to_join')->nullable();
            $table->text('primary_goal');
            $table->text('next_big_goal');
            $table->json('desired_opportunities')->nullable();
            $table->string('availability'); // immediate, project_based, not_now

            // Workflow & Statuts administrateur
            $table->string('status')->default('pending')->index(); 
            // pending, under_review, information_requested, accepted, rejected, archived
            $table->text('admin_notes')->nullable();
            $table->text('information_request_message')->nullable();
            $table->text('candidate_response_message')->nullable();
            $table->text('rejection_reason')->nullable();
            $table->timestamp('submitted_at')->nullable();
            $table->timestamp('reviewed_at')->nullable();
            $table->foreignId('reviewed_by')->nullable()->constrained('users')->nullOnDelete();

            $table->timestamps();
        });

        // 4. Pivot Applications <-> Skills
        Schema::create('talent_application_skills', function (Blueprint $table) {
            $table->id();
            $table->foreignId('talent_application_id')->constrained('talent_applications')->cascadeOnDelete();
            $table->foreignId('skill_id')->nullable()->constrained('skills')->cascadeOnDelete();
            $table->string('skill_name')->nullable();
            $table->timestamps();
        });

        // 5. Pivot Applications <-> Categories
        Schema::create('talent_application_categories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('talent_application_id')->constrained('talent_applications')->cascadeOnDelete();
            $table->foreignId('category_id')->constrained('categories')->cascadeOnDelete();
            $table->timestamps();
        });

        // 6. Portfolio Projects
        Schema::create('talent_application_projects', function (Blueprint $table) {
            $table->id();
            $table->foreignId('talent_application_id')->constrained('talent_applications')->cascadeOnDelete();
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('url')->nullable();
            $table->string('image_path')->nullable();
            $table->timestamps();
        });

        // 7. Talent Profiles (Official Members created upon acceptance)
        Schema::create('talent_profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('talent_application_id')->nullable()->constrained('talent_applications')->nullOnDelete();
            $table->foreignId('user_id')->nullable()->constrained('users')->nullOnDelete();
            $table->string('public_name');
            $table->string('title');
            $table->string('avatar_path')->nullable();
            $table->string('city');
            $table->string('country')->default('Bénin');
            $table->text('public_bio');
            $table->string('availability')->default('immediate');
            $table->string('starting_price')->nullable();
            $table->boolean('is_verified')->default(true);
            $table->boolean('is_active')->default(true);
            $table->string('featured_badge')->nullable();
            $table->string('website_url')->nullable();
            $table->string('linkedin_url')->nullable();
            $table->string('instagram_url')->nullable();
            $table->string('github_url')->nullable();
            $table->timestamps();
        });

        // 8. Pivot Talent Profiles <-> Skills
        Schema::create('talent_profile_skills', function (Blueprint $table) {
            $table->id();
            $table->foreignId('talent_profile_id')->constrained('talent_profiles')->cascadeOnDelete();
            $table->foreignId('skill_id')->constrained('skills')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('talent_profile_skills');
        Schema::dropIfExists('talent_profiles');
        Schema::dropIfExists('talent_application_projects');
        Schema::dropIfExists('talent_application_categories');
        Schema::dropIfExists('talent_application_skills');
        Schema::dropIfExists('talent_applications');
        Schema::dropIfExists('skills');
        Schema::dropIfExists('categories');
    }
};
