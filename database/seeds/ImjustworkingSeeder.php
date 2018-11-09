<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Image;
use App\Project;

class ImjustworkingSeeder extends Seeder
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
            'status' => 'deprecated',
            'lessons_learnt' => '
                [
                    "- Do not monkey back and build your self into or ontop of someone elses code",
                    "- Do not use small SaaS companies for crucial components (Quickblox)",
                    "- Cheap indian freelancers will not work",
                    "- Its nice to keep all DOM manipulation in one JS file but it is NOT very sustainable",
                    "- Plan out WHEN the project should be done and allocate time to it",
                    "+ We FINISHED. Extreme persistance",
                    "+ Involve dedicated server person",
                    "+ We ignored the naysayers",
                ]
            '
        ]);
        
        $project->images()->createMany(
            [
                [
                    'priority' => 1,
                    'url' => '/images/imjustworking/1.png'
                ],
                [
                    'priority' => 2,
                    'url' => '/images/imjustworking/2.png'
                ],
                [
                    'priority' => 3,
                    'url' => '/images/imjustworking/3.png'
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
