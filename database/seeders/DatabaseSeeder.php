<?php

namespace Database\Seeders;

use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $adminRole = Role::create([
            "name" => "Admin",
        ]);

        $supportRole = Role::create([
            "name" => "Support",
        ]);

        $adminUser = User::create([
            'name' => 'admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('admin'),
        ]);
        $adminUser->assignRole($adminRole);

        $supportUser = User::create([
            'name' => 'Support',
            'email' => 'support@example.com',
            'password' => Hash::make('support'),
        ]);
        $supportUser->assignRole($supportRole);

        User::create([
            'name' => 'User',
            'email' => 'user@example.com',
            'password' => Hash::make('user'),
        ]);
    }
}
