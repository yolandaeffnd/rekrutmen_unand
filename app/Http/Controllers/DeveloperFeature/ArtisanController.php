<?php

namespace App\Http\Controllers\DeveloperFeature;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class ArtisanController extends Controller
{
    public function migrateFresh()
    {
        Artisan::call("migrate:fresh");
        return 'Developer Success : Migrate Fresh Completed';
    }

    public function migrate()
    {
        Artisan::call("migrate");
        dd("Migrate Completed");
        return 'Developer Success : Migrate Completed';
    }

    public function dbSeed()
    {
        Artisan::call("db:seed");
        return 'Developer Success : DBSeed Completed';
    }
    public function clearCache()
    {
        Artisan::call("cache:clear");
        Artisan::call("route:clear");
        Artisan::call("config:clear");
        Artisan::call("view:clear");
        return 'Developer Success : Clear Cache Completed';
    }
    public function storageLink()
    {
        Artisan::call("storage:link");
        return 'Developer Success : Clear Cache Completed';
    }
}
