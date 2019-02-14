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
        $result = Project::where('name', 'sprintlist.io')->get();
        if(!$result->isEmpty()) {
            $result->first()->delete();
        }
        
        // PROJECT DETAILS
        $project = Project::create([
            'user_id' => User::withNickname('ajthinking')->id,
            'name' => 'sprintlist.io',
            'description' => 'A job posting board for short sprints.',
            'tags' => 'tailwindcss, websummit'
        ]);
        
        // PROJECT IMAGES
        $project->images()->createMany(
            [
                [
                    'priority' => 1,
                    'url' => env('APP_URL') . '/images/sprintlist.io/1.png'
                ],
                [
                    'priority' => 2,
                    'url' => env('APP_URL') . '/images/sprintlist.io/2.png'
                ],                                               
            ]
        );

        $project->addMembers(
            ['ajthinking', 'brainmaniac']
        );
    }
}
