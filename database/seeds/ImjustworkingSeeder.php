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

        $result = Project::where('name', 'imjustworking')->get(); 

        if(!$result->isEmpty()) {
            $result->first()->delete();
        }

        $project = Project::create([
            'user_id' => User::withNickName('ajthinking')->id,
            'name' => 'imjustworking',
            'description' => 'A GUI customizable chat built on a self-hosted IRC engine. Create a replica of your actual desktop workspace but it really is you chatting with your friends!',
            'elevator_pitch' => 'A camo chat for the office djungle',
            'tags' => 'Joke'
        ]);
        
        $project->images()->createMany(
            [
                [
                    'priority' => 1,
                    'url' => env('APP_URL') .'/images/imjustworking/1.png'
                ],
                [
                    'priority' => 2,
                    'url' => env('APP_URL') .'/images/imjustworking/2.png'
                ],
                [
                    'priority' => 3,
                    'url' => env('APP_URL') .'/images/imjustworking/3.png'
                ],                                
            ]
        );

        $project->addMembers(
            ['ajthinking', 'brainmaniac']
        );
    }
}
