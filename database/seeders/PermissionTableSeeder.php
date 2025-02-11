<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            'user-create',
            'user-read',
            'user-update',
            'user-delete',
            'role-create',
            'role-read',
            'role-update',
            'role-delete',
            'department-create',
            'department-read',
            'department-update',
            'department-delete',
            'mission-create',
            'mission-read',
            'mission-update',
            'mission-delete',
            'mission-approve',
            'mission-reject',
            'left-create',
            'left-read',
            'left-update',
            'left-delete',
            'left-approve',
            'left-reject',
            'notification-read'
        ];

        foreach ($permissions as $permission) {
             Permission::create(['name' => $permission]);
        }
    }
}
