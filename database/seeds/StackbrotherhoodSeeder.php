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
        $result = Project::where('name', 'stackbrotherhood')->get(); 

        if(!$result->isEmpty()) {
            $result->first()->delete();
        }

        $project = Project::create([
            'user_id' => User::withNickname('ajthinking')->id,
            'name' => 'stackbrotherhood',
            'description' => 'Keep track of my team questions',
            'tags' => 'Depricated, Stack Exchange API'
        ]);
        
        $project->images()->createMany(
            [
                [
                    'priority' => 1,
                    'url' => env('APP_URL') .'/images/stackbrotherhood/1.png'
                ],                             
            ]
        );

        $project->addMembers(
            ['ajthinking']
        );
    }
}
