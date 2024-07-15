<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Model::unguard();

        // $this->call("OthersTableSeeder");

        $superadmin = Role::create(['name' => 'Super Admin']);
        $user = Role::create(['name' => 'User']);

        $superadmin->givePermissionTo(Permission::all());
        $user->givePermissionTo(['dashboard-access', 'profile-access']);

        User::firstWhere('email', 'superadmin@gmail.com')->assignRole('Super Admin');
        User::firstWhere('email', 'user@gmail.com')->assignRole('User');
    }
}
