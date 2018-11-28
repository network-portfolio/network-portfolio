<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Image;
use App\Project;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        $this->call(DeveloperSeeder::class);
        
        $this->call(StimpackSeeder::class);
        $this->call(SprintlistSeeder::class);
        $this->call(ImjustworkingSeeder::class);
        $this->call(PimpmydrawingSeeder::class);
    }
}
