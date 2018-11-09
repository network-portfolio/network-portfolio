<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Image;
use App\Project;

class StimpackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // PROJECT DETAILS
        $project = Project::create([
            'user_id' => User::named('Anders')->id,
            'name' => 'stimpack',
            'description' => 'Code automation and manipulating software for rapid Laravel application prototyping.',
            'elevator_pitch' => 'This tool saved me a TON of time.',
            'github' => "https://github.com/ajthinking",
            'twitter' => null,
            'facebook' => null,
            'production_url' => null,
            'status' => 'production',
            'lessons_learnt' => '
                [
                    "+ we built an entire ecosystem",
                    "+ using react is cred intensive",
                    "- avoid the never ending scope creep",
                    "+ scope bravery",
                    "- the product lacks in presentation - it assumes the end user will understand stuff not explained or explained badly",
                    "- brilliant unpolished idea",
                    "+ first kickstarter with ~1% converstions on 500 SEK",
                    "- avoid complicated custom designs, preferably use of the shelf components instead",
                ]
            '            
        ]);
        
        // PROJECT IMAGES
        $project->images()->createMany(
            [
                [
                    'priority' => 1,
                    'url' => env('APP_URL') . '/images/stimpack/1.png'
                ],
                [
                    'priority' => 2,
                    'url' => env('APP_URL') . '/images/stimpack/2.png'
                ],
                [
                    'priority' => 3,
                    'url' => env('APP_URL') . '/images/stimpack/3.png'
                ],                                
            ]
        );

        // PROJECT MEMBERS
        $project->projectMembers()->createMany([
            [
                'user_id' => User::named('Olof')->id
            ],
        ]);
    }
}
