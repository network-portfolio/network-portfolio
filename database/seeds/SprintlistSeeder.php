<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Image;
use App\Project;

class SprintlistSeeder extends Seeder
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
            'user_id' => User::named('Olof')->id,
            'name' => 'sprintlist.io',
            'description' => 'A job posting board for short sprints.',
            'elevator_pitch' => 'Todo.',
            'github' => null,
            'twitter' => null,
            'facebook' => null,
            'production_url' => null,
            'status' => 'production'
        ]);
        
        // PROJECT IMAGES
        $project->images()->createMany(
            [
                [
                    'priority' => 1,
                    'url' => env('APP_URL') . '/images/sprintlist.io/1.png'
                ],                               
            ]
        );

        // PROJECT MEMBERS
        $project->projectMembers()->createMany([
            [
                'user_id' => User::named('Anders')->id
            ],
        ]);
    }
}
