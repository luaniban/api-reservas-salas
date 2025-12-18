<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use App\Models\Resource;
use App\Models\Reservation;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        Role::factory()->create([
            'name' => 'admin'
        ]);
        Role::factory()->create([
            'name' => 'user'
        ]);


        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@admin.com',
            'role_id' => 1
        ]);
        User::factory(9)->create();

        Resource::factory(10)->create();
        Reservation::factory(10)->create();


    }
}
