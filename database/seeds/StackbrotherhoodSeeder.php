<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Image;
use App\Project;

class StackbrotherhoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $project = Project::create([
            'user_id' => User::withNickname('ajthinking')->id,
            'name' => 'stackbrotherhood',
            'description' => 'Placeholder',
            'elevator_pitch' => 'Placeholder',
            'github' => "",
            'twitter' => null,
            'facebook' => null,
            'production_url' => '',
            'status' => 'active',
            'lessons_learnt' => '
                [
                    //
                ]
            '
        ]);
        
        $project->images()->createMany(
            [
                [
                    'priority' => 1,
                    'url' => env('APP_URL') .'/images/stackbrotherhood/1.png'
                ],                             
            ]
        );

        $project->projectMembers()->createMany([
            [
                'user_id' => User::withNickname('ajthinking')->id
            ],
        ]);
    }
}
