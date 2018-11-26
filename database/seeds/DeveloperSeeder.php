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
            'name' => "Anders Jürisoo",
            'avatar_url' => "https://avatars0.githubusercontent.com/u/3457668?v=4",
            'email' => "jurisoo@hotmail.com",
            'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
            'remember_token' => str_random(10),
        ]);

        User::create([
            'name' => "Olof Jondelius",
            'avatar_url' => "https://avatars3.githubusercontent.com/u/13656814?v=4",
            'email' => "olof.jondelius@gmail.com",
            'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
            'remember_token' => str_random(10),
        ]);
        
        User::create([
            'name' => "Marcus X",
            'avatar_url' => "https://avatars1.githubusercontent.com/u/3457617?v=4",
            'email' => "marcus@test.com",
            'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
            'remember_token' => str_random(10),
        ]);        
    }
}
