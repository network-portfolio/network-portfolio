<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Image;
use App\Project;

class FmwproxySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $project = Project::create([
            'user_id' => User::named('Olof')->id,
            'name' => 'FMW proxy',
            'description' => 'Save up to 90% on your FME Cloud bills',
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
                    'url' => env('APP_URL') .'/images/fmwproxy/1.png'
                ],                             
            ]
        );

        $project->projectMembers()->createMany([
            [
                'user_id' => User::named('Anders')->id
            ],
        ]);
    }
}
