<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Image;
use App\Project;

class imjustworking extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $project = Project::create([
            'user_id' => User::named('Anders')->id,
            'name' => 'imjustworking',
            'description' => 'A GUI customizable chat built on a self-hosted IRC engine. Create a replica of your actual desktop workspace but it really is you chatting with your friends!',
            'elevator_pitch' => 'A camo chat for the office djungle',
            'github' => "https://github.com/ajthinking/imjustworking",
            'twitter' => null,
            'facebook' => null,
            'production_url' => null,
            'status' => 'deprecated'
        ]);
        
        $project->images()->createMany(
            [
                [
                    'priority' => 1,
                    'url' => '/images/imjustworking/Imjustworking - The camo chat for the office djungle! 2018-11-09 18-44-49.png'
                ],
                [
                    'priority' => 2,
                    'url' => '/images/imjustworking/#imjustworking — Imjustworking - The camo chat for the office djungle! 2018-11-09 19-12-05.png'
                ],
                [
                    'priority' => 3,
                    'url' => '/images/imjustworking/#imjustworking — Imjustworking - The camo chat for the office djungle! 2018-11-09 19-14-07.png'
                ],                                
            ]
        );

        $project->projectMembers()->createMany([
            [
                'user_id' => User::named('Olof')->id
            ],
        ]);
    }
}
