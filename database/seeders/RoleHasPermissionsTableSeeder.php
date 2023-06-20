<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;

class RoleHasPermissionsTableSeeder extends Seeder
{
    public function run()
    {
        // Ambil peran "admin"
        $adminRole = Role::where('name', 'admin')->first();

        // Daftar izin untuk peran "admin"
        $adminPermissions = [
            'create menus',
            'edit menus',
            'delete menus',
            'create table',
            'edit table',
            'delete table',
        ];

        // Hapus izin yang saat ini diberikan kepada peran "admin"
        $adminRole->permissions()->detach();

        // Berikan izin baru kepada peran "admin"
        foreach ($adminPermissions as $permission) {
            $adminPermission = Permission::where('name', $permission)->first();
            if ($adminPermission) {
                $adminRole->givePermissionTo($adminPermission);
            }
        }
    }
}
