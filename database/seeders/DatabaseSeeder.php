<?php

namespace Database\Seeders;

// use App\Models\{BidangKBK, Department, StudyProgram, Unit};

use App\Models\Formasi;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // $this->call(DepartmentSeeder::class);
        $this->call(UnitSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(DataProdiSeeder::class);
        $this->call(GeneratorSeeder::class);
        $this->call(FormasiHasPendidikanSeeder::class);
        $this->call(DataFileUploadSeeder::class);
        $this->call(DataWilayah::class);
        $this->call(ArticleSeeder::class);
    }
}
