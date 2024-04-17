<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Flight;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Role::create(['name'=>'admin']);
        // Role::create(['name'=>'user']);

        // $admin = User::create([
        //     'name' => 'admin',
        //     'email' => 'admin@gmail.com',
        //     'password' => Hash::make('password')
        // ]);
        // $admin->assignRole('admin');

        // $user = User::create([
        //     'name' => 'user',
        //     'email' => 'user@gmail.com',
        //     'password' => Hash::make('password')
        // ]);
        // $user->assignRole('user');

        // Permission::firstOrCreate(['name' => 'view users']);
        // Permission::firstOrCreate(['name' => 'search users']);
        // Permission::firstOrCreate(['name' => 'create users']);
        // Permission::firstOrCreate(['name' => 'update users']);
        // Permission::firstOrCreate(['name' => 'delete users']);
        // Permission::firstOrCreate(['name' => 'view flights']);
        // Permission::firstOrCreate(['name' => 'search flights']);
        // Permission::firstOrCreate(['name' => 'create flights']);
        // Permission::firstOrCreate(['name' => 'update flights']);
        // Permission::firstOrCreate(['name' => 'delete flights']);
        // Permission::firstOrCreate(['name' => 'view passengers']);
        // Permission::firstOrCreate(['name' => 'search passengers']);
        // Permission::firstOrCreate(['name' => 'create passengers']);
        // Permission::firstOrCreate(['name' => 'update passengers']);
        // Permission::firstOrCreate(['name' => 'delete passengers']);


        // $adminRole = Role::where('name', 'admin')->first();
        // $adminRole->givePermissionTo([
        // 'view users',
        //     'search users',
        //     'create users',
        //     'update users',
        //     'delete users',
        //     'view flights',
        //     'search flights',
        //     'create flights',
        //     'update flights',
        //     'delete flights',
        //     'view passengers',
        //     'search passengers',
        //     'create passengers',
        //     'update passengers',
        //     'delete passengers',
        // ]);
        $userRole = Role::where('name', 'user')->first();
        $userRole->givePermissionTo([
            // 'view flights',
            // 'search flights',
            'view users','search users','view passengers','search passengers'
        ]);

        // for($i=3;$i<10;$i++){
        //     $user = User::create([
        //             'name' => "user$i",
        //             'email' => "user$i@gmail.com",
        //             'password' => Hash::make('password')
        //         ]);
        //         $user->assignRole('user');
        // }

        // \App\Models\Flight::factory()->count(50)->create();
        // \App\Models\Passenger::factory(1000)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

    }
}
