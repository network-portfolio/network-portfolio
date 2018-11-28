<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Image;
use App\Project;

class PimpmydrawingSeeder extends Seeder
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
            'name' => 'pimpmydrawing',
            'description' => 'Placeholder',
            'elevator_pitch' => 'Placeholder',
            'github' => "",
            'twitter' => null,
            'facebook' => null,
            'production_url' => 'https://pimpmydrawing.com',
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
                    'url' => env('APP_URL') .'/images/pimpmydrawing/1.png'
                ],                             
            ]
        );

        $project->projectMembers()->createMany([
            [
                'user_id' => User::named('Olof')->id
            ],
            [
                'user_id' => User::named('Anders')->id
            ],
        ]);
    }
}
