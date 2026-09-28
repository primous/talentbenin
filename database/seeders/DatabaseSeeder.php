<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Seed Categories & Skills
        $this->call(TalentClubSeeder::class);

        // 2. Create Administrator Account for Filament
        User::firstOrCreate(
            ['email' => 'admin@talentclub.bj'],
            [
                'name' => 'Administrateur Talent Club',
                'password' => Hash::make('password'),
            ]
        );
    }
}
