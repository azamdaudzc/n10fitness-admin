<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::create([
            'first_name' => 'Super',
            'last_name' => 'Admin',
            'email' => 'admin@admin.com',
            'user_type' => 'admin',
            'password' => Hash::make('admin'),
        ]);


        \App\Models\User::create([
            'first_name' => 'Super',
            'last_name' => 'Coach',
            'email' => 'coach@coach.com',
            'user_type' => 'coach',
            'password' => Hash::make('coach'),
        ]);

        \App\Models\User::create([
            'first_name' => 'Super',
            'last_name' => 'Client',
            'email' => 'client@client.com',
            'user_type' => 'user',
            'password' => Hash::make('client'),
        ]);


        \App\Models\AthleticType::create([
            'name' => 'Powerlifter',
        ]);
        \App\Models\AthleticType::create([
            'name' => 'Physique Athlete',
        ]);
        \App\Models\AthleticType::create([
            'name' => 'Lifestyle Athlete',
        ]);
        \App\Models\AthleticType::create([
            'name' => 'Sport Performance',
        ]);
        \App\Models\AthleticType::create([
            'name' => 'Speed and agility',
        ]);


        \App\Models\ExerciseEquipment::create([
            'name' => 'Dumbell',
        ]);
        \App\Models\ExerciseEquipment::create([
            'name' => 'Barbell',
        ]);


        \App\Models\ExerciseCategory::create([
            'name' => 'Chest',
        ]);
        \App\Models\ExerciseCategory::create([
            'name' => 'Shoulder',
        ]);



        \App\Models\ExerciseMovementPattern::create([
            'name' => 'Horizontal Abduction',
        ]);
        \App\Models\ExerciseMovementPattern::create([
            'name' => 'Hinge',
        ]);



        \App\Models\ExerciseMuscle::create([
            'name' => 'Erector Spinae',
        ]);
        \App\Models\ExerciseMuscle::create([
            'name' => 'Glute Maximus',
        ]);
        \App\Models\ExerciseMuscle::create([
            'name' => 'Hamstring',
        ]);
        \App\Models\ExerciseMuscle::create([
            'name' => 'Latissimus Dorsi',
        ]);




    }
}
