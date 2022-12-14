<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Http\Resources\Users\CoachClientResource;
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

        $this->call([
            UserSeeder::class,
            // ExerciseSeeder::class,
            CheckinSeeder::class,
            // NotificationSeeder::class,
        ]);

    }
}
