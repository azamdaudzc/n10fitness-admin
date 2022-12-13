<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Http\Resources\Users\CoachClientResource;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
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
            'id' => 1,
            'first_name' => 'Super',
            'last_name' => 'Admin',
            'email' => 'admin@admin.com',
            'user_type' => 'admin',
            'password' => Hash::make('admin'),
        ]);


        \App\Models\User::create([
            'id' => 2,
            'first_name' => 'Super',
            'last_name' => 'Coach',
            'email' => 'coach@coach.com',
            'user_type' => 'coach',
            'password' => Hash::make('coach'),
        ]);

        \App\Models\UserPermission::create([
            'user_id' => 2,
            'name' => 'Program Deployment'
        ]);

        \App\Models\User::create([
            'id' => 3,
            'first_name' => 'Super',
            'last_name' => 'Client',
            'email' => 'client@client.com',
            'user_type' => 'user',
            'password' => Hash::make('client'),
        ]);

        \App\Models\User::create([
            'id' => 4,
            'first_name' => 'mini',
            'last_name' => 'Coach',
            'email' => 'mini@coach.com',
            'user_type' => 'coach',
            'password' => Hash::make('mini'),
        ]);


        \App\Models\ClientCoach::create([
            'id' => 1,
            'coach_id' => 2,
            'assigned_by' => 1,
            'client_id' => 3
        ]);

    }
}
