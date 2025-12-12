<?php

namespace Database\Seeders;

use App\Models\User; 
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class PermissionAltairSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // reset cahced roles and permission
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // Membuat izin
        Permission::create(['name' => 'create']);
        Permission::create(['name' => 'read']);
        Permission::create(['name' => 'update']);
        Permission::create(['name' => 'delete']);

        // Membuat peran
        $admin = Role::create(['name' => 'admin']);
        $admin->givePermissionTo(['create', 'read', 'update', 'delete']);

        $manager = Role::create(['name' => 'manager']);
        $manager->givePermissionTo(['create', 'read', 'update', 'delete']);

        $projectManager = Role::create(['name' => 'project manager']);
        $projectManager->givePermissionTo(['create', 'read', 'update', 'delete']);

        $developer = Role::create(['name' => 'developer']);
        $developer->givePermissionTo(['read', 'update']);

        $tester = Role::create(['name' => 'tester']);
        $tester->givePermissionTo(['read']);

        // gets all permissions via Gate::before rule
        $superadminRole = Role::create(['name' => 'super-admin']);

        // create demo users
        $user = User::factory()->create([
            'name' => 'admin user',
            'email' => 'admin@email.com',
            'password' => bcrypt('123456')
        ]);
        $user->assignRole($admin);

        $user = User::factory()->create([
            'name' => 'manager user',
            'email' => 'manager@email.com',
            'password' => bcrypt('123456')
        ]);
        $user->assignRole($manager);

        $user = User::factory()->create([
            'name' => 'project manager user',
            'email' => 'pm@@email.com',
            'password' => bcrypt('123456')
        ]);
        $user->assignRole($projectManager);

        $user = User::factory()->create([
            'name' => 'developer user',
            'email' => 'developer@@email.com',
            'password' => bcrypt('123456')
        ]);
        $user->assignRole($developer);

        $user = User::factory()->create([
            'name' => 'tester user',
            'email' => 'tester@@email.com',
            'password' => bcrypt('123456')
        ]);
        $user->assignRole($tester);
    }
}
