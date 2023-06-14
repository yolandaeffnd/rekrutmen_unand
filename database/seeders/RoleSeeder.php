<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //permission
        Permission::create(['name' => 'manage-user']);
        Permission::create(['name' => 'master-formasi']);
        Permission::create(['name' => 'rekrutmen-pelamar']);
        Permission::create(['name' => 'rekrutmen-pelamar-verifikasi']);
        Permission::create(['name' => 'article']);

        //role
        // Role::create(['name' => 'dekan']);

        Role::create(['name' => 'superadmin'])
            ->givePermissionTo('manage-user')
            ->givePermissionTo('master-formasi')
            ->givePermissionTo('rekrutmen-pelamar')
            ->givePermissionTo('rekrutmen-pelamar-verifikasi')
            ->givePermissionTo('article');

        Role::create(['name' => 'admin'])
            ->givePermissionTo('rekrutmen-pelamar')
            ->givePermissionTo('rekrutmen-pelamar-verifikasi');
    }
}
