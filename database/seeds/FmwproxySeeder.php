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
        $result = Project::where('name', 'FMW proxy')->get(); 

        if(!$result->isEmpty()) {
            $result->first()->delete();
        }

        $project = Project::create([
            'user_id' => User::withNickname('ajthinking')->id,
            'name' => 'FMW proxy',
            'description' => 'Save up to 90% on your FME Cloud bills',
            'tags' => "FME, SAAS"
        ]);
        
        $project->images()->createMany(
            [
                [
                    'priority' => 1,
                    'url' => env('APP_URL') .'/images/fmwproxy/1.png'
                ],                             
            ]
        );

        $project->addMembers(
            ['ajthinking']
        );
    }
}
