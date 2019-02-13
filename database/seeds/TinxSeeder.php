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
        $result = Project::where('name', 'tinx')->get();
        if(!$result->isEmpty()) {
            $result->first()->delete();
        }


        $project = Project::create([
            'user_id' => User::withNickname('ajthinking')->id,
            'name' => 'tinx',
            'description' => 'Reload your Laravel Tinker session from inside Tinker, plus magic shortcuts for first(), find(), where(), and more!',
            'github' => "github.com/furey/tinx",
            'tags' => 'Laravel, CLI, package'
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
