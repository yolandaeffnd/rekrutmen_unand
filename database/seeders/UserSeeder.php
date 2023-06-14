<?php

namespace Database\Seeders;

use App\Models\{Unit, User};
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //user

        //--------------------------------------------------------------------------------------

        $user = User::create(
            [
                'id' => 1,
                'name' => 'Zumardi Rahman',
                'username' => 'zumardirahman',
                'level' => 'developer',
                'email_verified_at' => '2023-01-01',
                'email' => 'zumardirahman@adm.unand.ac.id',
                'password' => bcrypt('12345678'),
                'password' => bcrypt('12345678'),
                'id_unit' => Unit::where('name', 'MIPA')->first()->id,
            ]
        )->assignRole('superadmin') //punya 2 role
        ->assignRole('admin');

        //--------------------------------------------------------------------------------------

        $user = User::create(
            [
                'id' => 2,
                'name' => 'Yomei Hendra',
                'username' => 'yomeihendra',
                'level' => 'user',
                'email_verified_at' => '2023-01-01',
                'email' => 'yomeihendra@adm.unand.ac.id',
                'password' => bcrypt('12345678'),
                'id_unit' => Unit::where('name', 'REKTORAT')->first()->id,
            ]
        )->assignRole('superadmin');

        //--------------------------------------------------------------------------------------

        $user = User::create(
            [
                'id' => 5,
                'name' => 'Putri',
                'username' => 'putri',
                'level' => 'user',
                'email_verified_at' => '2023-01-01',
                'email' => 'putri@adm.unand.ac.id',
                'password' => bcrypt('putri'),
                'id_unit' => Unit::where('name', 'REKTORAT')->first()->id,
            ]
        )->assignRole('admin')
        ->assignRole('superadmin');

        //--------------------------------------------------------------------------------------
        $user = User::create(
            [
                'id' => 7,
                'name' => 'Novia',
                'username' => 'novia',
                'level' => 'user',
                'email_verified_at' => '2023-01-01',
                'email' => 'novia@adm.unand.ac.id',
                'password' => bcrypt('novia'),
                'id_unit' => Unit::where('name', 'MIPA')->first()->id,
            ]
        )->assignRole('admin');

        $user = User::create(
            [
                'id' => 8,
                'name' => 'Rafi Ahmad',
                'username' => 'rafi',
                'level' => 'pelamar',
                'email_verified_at' => '2023-01-01',
                'email' => 'rafi@adm.unand.ac.id',
                'password' => bcrypt('rafi')
            ]
        );

        //--------------------------------------------------------------------------------------
    }
}
