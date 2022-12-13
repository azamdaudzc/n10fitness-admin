<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Http\Resources\Users\CoachClientResource;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class NotificationSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();




        \App\Models\Notification::create([
            'user_id' => 1,
            'name' => 'test name 1',
            'message' =>'test notification 1',
            'url' => null,
        ]);

        \App\Models\Notification::create([
            'user_id' => 1,
            'name' => 'test name 2',
            'message' => 'test notification 2',
            'url' => null,
        ]);

        \App\Models\Notification::create([
            'user_id' => 2,
            'name' => 'test name 1',
            'message' => 'test notification 1',
            'url' => null,
        ]);

        \App\Models\Notification::create([
            'user_id' => 2,
            'name' => 'test name 2',
            'message' => 'test notification 2',
            'url' => null,
        ]);

        \App\Models\Notification::create([
            'user_id' => 3,
            'name' => 'test name 1',
            'message' => 'test notification 1',
            'url' => null,
        ]);

        \App\Models\Notification::create([
            'user_id' => 3,
            'name' => 'test name 2',
            'message' => 'test notification 2',
            'url' => null,
        ]);



    }
}
