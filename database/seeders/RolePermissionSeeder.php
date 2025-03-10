<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // membuat beberapa role
        // membuat default user untuk super admin / owner

        $ownerRole = Role::create(([
            'name' => 'owner'
        ]));

        $studentRole = Role::create(([
            'name' => 'student'
        ]));

        $teacherRole = Role::create(([
            'name' => 'teacher'
        ]));

        // akun super admin untuk mengelola data awal
        // e.g. data category, class, etc.

        $userOwner = User::create([
            'name' => 'Yazky Maulana',
            'occupation' => 'Programmer',
            'avatar' => 'images/default-avatar.png',
            'email' => 'yazky@programmer.com',
            'password' => bcrypt('123123123'),
        ]);

        $userOwner->assignRole($ownerRole);

    }
}
