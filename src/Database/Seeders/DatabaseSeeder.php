<?php

namespace Hanafalah\WellmedFeature\Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        try {
            \Illuminate\Support\Facades\Artisan::call('telescope:pause');
            $this->call([
                MasterPermissionSeeder::class,
                MasterFeatureSeeder::class
            ]);
        } catch (\Throwable $th) {
            dd($th->getMessage());
            throw $th;
        }
    }
}
