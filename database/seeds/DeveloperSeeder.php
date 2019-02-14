<?php

use Illuminate\Database\Seeder;
use App\User;

class DeveloperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nickname' => "ajthinking",
            'avatar' => "https://avatars0.githubusercontent.com/u/3457668?v=4",
            'portfolio' => "https://www.andersjurisoo.com",
            'provider' => "github",
            'provider_id' => "3457668",
            'network_portfolio_api_token' => bin2hex(random_bytes(24))
        ]);

        User::create([
            'nickname' => "brainmaniac",
            'avatar' => "https://avatars3.githubusercontent.com/u/13656814?v=4",
            'portfolio' => "http://www.olofjondelius.se",
            'provider' => "github",
            'provider_id' => "13656814",
            'network_portfolio_api_token' => bin2hex(random_bytes(24))

        ]);
        
        /*   
        User::create([
            'name' => "Marcus X",
            'avatar_url' => "https://avatars1.githubusercontent.com/u/3457617?v=4",
            'portfolio_url' => "https://www.github.com/mwthinker",
            'email' => "marcus@test.com",
            'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
            'remember_token' => str_random(10),
        ]);
        */        
    }
}
