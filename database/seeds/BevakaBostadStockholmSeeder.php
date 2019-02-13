<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Image;
use App\Project;

class BevakaBostadStockholmSeeder extends Seeder
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
            'user_id' => User::withNickname('ajthinking')->id,
            'name' => 'bevakabostadstockholm',
            'description' => 'Subscribe to available rental units in Stockholm based on geometry.',
            'elevator_pitch' => 'Todo.',
            'github' => null,
            'twitter' => null,
            'facebook' => null,
            'production_url' => null,
            'status' => 'production',
            'lessons_learnt' => '
                [
                ]
            '
        ]);
        
        // PROJECT IMAGES
        $project->images()->createMany(
            [
                [
                    'priority' => 1,
                    'url' => env('APP_URL') . '/images/bevakabostadstockholm/bevakabostadstockholm.png'
                ],                                             
            ]
        );

        // PROJECT MEMBERS
        $project->projectMembers()->createMany([
            [
                'user_id' => User::named('Olof')->id
            ],
            [
                'user_id' => User::withNickname('ajthinking')->id
            ],
        ]);
    }
}
