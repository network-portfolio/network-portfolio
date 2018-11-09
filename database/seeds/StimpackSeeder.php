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
        $project = Project::create([
            'user_id' => User::named('Anders')->id,
            'name' => 'stimpack',
            'description' => 'Code automation and manipulating software for rapid Laravel application prototyping.',
            'elevator_pitch' => 'This tool saved me a TON of time.',
            'github' => "https://github.com/ajthinking",
            'twitter' => null,
            'facebook' => null,
            'production_url' => null,
            'status' => 'production'
        ])->images()->createMany(
            [
                [
                    'priority' => 1,
                    'url' => 'https://picsum.photos/500/100?image=1'
                ],
                [
                    'priority' => 2,
                    'url' => 'https://picsum.photos/500/100?image=2'
                ],
                [
                    'priority' => 3,
                    'url' => 'https://picsum.photos/500/100?image=3'
                ],                                
            ]
        );

        
    }
}
