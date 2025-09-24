<?php

namespace Hanafalah\WellmedFeature\Commands;

use Illuminate\Support\Facades\Artisan;

class SeedCommand extends EnvironmentCommand{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'wellmed-feature:seed {class? : Class name of the seeder}';


    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command ini digunakan untuk seeding';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $class = $this->argument('class') ?? "DatabaseSeeder";
        Artisan::call('db:seed',[
            '--class' => "Hanafalah\WellmedFeature\\Database\Seeders\\$class"
        ]);   
    }
}