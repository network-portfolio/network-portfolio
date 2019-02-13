<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Image;
use App\Project;

class SprintlistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // PROJECT DETAILS
        $project = Project::create([
            'user_id' => User::named('Olof')->id,
            'name' => 'sprintlist.io',
            'description' => 'A job posting board for short sprints.',
            'elevator_pitch' => 'Todo.',
            'github' => null,
            'twitter' => null,
            'facebook' => null,
            'production_url' => null,
            'status' => 'production',
            'lessons_learnt' => '
                [
                    "- No plan B for the eventuality that our way to market failed (aka. levelsio didnt join the ride) - should have at least revaluate the situation",
                    "- "Again underestimated scope and time",
                    "- "Feedback backend code-review",
                    "+ We really did KIS it!",
                    "+ We finished!",
                    "+ We successfully implemented payment solution and with that broke a barrier!",
                    "+ Brave ajthinking move to use Tailwind, epic win!",
                    "+ Good use of off the shelves pics",
                    "+ Followed conventions in naming and storing",
                    "+ Feedback front-end code review",
                    "+ Waited sufficiently to get site ready until release",
                    "+ Started using automated testing",
                    "+ Switched roles in team on back-end and front-end",
                    "+ Dared to make a ads campaign on reddit!",
                    "+ Good prioritization not getting hanged up on small unnecessary stuff - choosed path of least resistance but still kept project integrity",
                    "+ On board - Either your in or your not! Think of that before.",
                    "+ Epic PR-campaign with stamp on websummit!",
                ]
            '
        ]);
        
        // PROJECT IMAGES
        $project->images()->createMany(
            [
                [
                    'priority' => 1,
                    'url' => env('APP_URL') . '/images/sprintlist.io/1.png'
                ],
                [
                    'priority' => 2,
                    'url' => env('APP_URL') . '/images/sprintlist.io/2.png'
                ],                                               
            ]
        );

        // PROJECT MEMBERS
        $project->projectMembers()->createMany([
            [
                'user_id' => User::named('Olof')->id
            ],
            [
                'user_id' => User::withNickname('ajthinking')->id
            ],
        ]);
    }
}
