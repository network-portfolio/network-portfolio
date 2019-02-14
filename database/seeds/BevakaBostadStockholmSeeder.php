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
        $result = Project::where('name', 'bevakabostadstockholm')->get(); 

        if(!$result->isEmpty()) {
            $result->first()->delete();
        }

        // PROJECT DETAILS
        $project = Project::create([
            'user_id' => User::withNickname('ajthinking')->id,
            'name' => 'bevakabostadstockholm',
            'description' => 'Subscribe to available rental units in Stockholm based on geometry.',
            'tags' => 'Leaflet, subscription'
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
        $project->addMembers(
            ['ajthinking', 'brainmaniac']
        );
    }
}
