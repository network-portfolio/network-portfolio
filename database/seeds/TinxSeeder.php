<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Image;
use App\Project;

class TinxSeeder extends Seeder
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
            'name' => 'tinx',
            'description' => 'Placeholder',
            'github' => "",
        ]);
        
        $project->images()->createMany(
            [
                [
                    'priority' => 1,
                    'url' => env('APP_URL') .'/images/tinx/1.gif'
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
