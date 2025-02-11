<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Mission;
use App\Models\Left;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'Rith Panhapich',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456')
        ]);

        $role = Role::create(['name' => 'Admin']);
        $permissions = Permission::pluck('id','id')->all();
        $role->syncPermissions($permissions);
        $user->assignRole([$role->id]);

        $user = User::create([
            'name' => 'CEO',
            'email' => 'ceo@gmail.com',
            'password' => bcrypt('123456')
        ]);

        $role = Role::create(['name' => 'CEO']);
        $role->givePermissionTo('user-read','role-read','department-read','mission-read','left-read','mission-approve','mission-reject','left-approve','left-reject');
        $user->assignRole([$role->id]);

        $user = User::create([
            'name' => 'HR Manager',
            'email' => 'hrmanager@gmail.com',
            'password' => bcrypt('123456')
        ]);

        $role = Role::create(['name' => 'HR Manager']);
        $role->givePermissionTo('user-read','role-read','department-read','mission-read','left-read','mission-approve','mission-reject','left-approve','left-reject');
        $user->assignRole([$role->id]);

        $user = User::create([
            'name' => 'CFO',
            'email' => 'cfo@gmail.com',
            'password' => bcrypt('123456')
        ]);

        $role = Role::create(['name' => 'CFO']);
        $role->givePermissionTo('user-read','role-read','department-read','mission-read','left-read','mission-approve','mission-reject','left-approve','left-reject');
        $user->assignRole([$role->id]);

        $user = User::create([
            'name' => 'Team Leader',
            'email' => 'teamleader@gmail.com',
            'password' => bcrypt('123456')
        ]);

        $role = Role::create(['name' => 'Team Leader']);
        $role->givePermissionTo('user-read','role-read','department-read','mission-read','left-read','mission-approve','mission-reject','left-approve','left-reject');
        $user->assignRole([$role->id]);
        
        $user = User::create([
            'name' => 'Department Administrator',
            'email' => 'departmentadministrator@gmail.com',
            'password' => bcrypt('123456')
        ]);

        $role = Role::create(['name' => 'Department Admin']);
        $role->givePermissionTo('user-read','role-read','department-read','mission-read','left-read','mission-create','mission-update','mission-delete','left-create','left-update','left-delete');
        $user->assignRole([$role->id]);

        $user = User::create([
            'name' => 'Employee',
            'email' => 'employee@gmail.com',
            'password' => bcrypt('123456')
        ]);

        $role = Role::create(['name' => 'Employee']);
        $role->givePermissionTo('user-read','role-read','department-read','mission-read','left-read','notification-read','mission-create','mission-update','mission-delete','left-create','left-update','left-delete');
        $user->assignRole([$role->id]);

        for ($i=1; $i <= 20; $i++) {
            $mission = Mission::create([
                'name' => 'Mission '.$i,
                'detail' => 'Mission '.$i.' Details',
            ]);
        }

        for ($i=1; $i <= 20; $i++) {
            $left = Left::create([
                'name' => 'Leave '.$i,
                'detail' => 'Leave '.$i.' Details',
            ]);
        }

    }
}
