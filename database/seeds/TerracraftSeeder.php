<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Image;
use App\Project;

class TerracraftSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $result = Project::where('name', 'Terracraft')->get();
        if(!$result->isEmpty()) {
            $result->first()->delete();
        }


        $project = Project::create([
            'user_id' => User::withNickname('ajthinking', 'brainmaniac')->id,
            'name' => 'Terracraft',
            'description' => 'A geographic MMORPG created before the Pokemon Go era. The earth is split into 400 000 000 000 tiles. Made possible by predictable geometry, seeded randoms and client side rendering.',
            'tags' => 'Leaflet, PostGIS'
        ]);
        
        $project->images()->createMany(
            [
                [
                    'priority' => 1,
                    'url' => env('APP_URL') .'/images/Terracraft/1.png'
                ],                             
            ]
        );

        $project->addMembers(
            ['ajthinking']
        );
    }
}
