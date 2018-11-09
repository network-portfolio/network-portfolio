<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Image;
use App\Project;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        $this->call(DeveloperSeeder::class);
        $this->call(StimpackSeeder::class);
        $this->call(SprintlistSeeder::class);

        /*
            // EXAMPLE *********************************************
        // Create users
        factory(App\User::class, 5)->create();

        // Create some projects for user 1
        $project = Project::create([
            'user_id' => 1,
            'name' => 'Epic Sales',
            'description' => 'The sales platform that boosts your sales with AI and blockchain',
            'elevator_pitch' => 'Have you ever looked for more conversions? Look no more fam.',
            'github' => "https://github.com/ajthinking",
            'twitter' => null,
            'facebook' => null,
            'production_url' => null,
            'status' => 'IDEA'
        ]);
        
        $project->images()->createMany(
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
        
        $project->projectMembers()->createMany(
            [
                [
                    "user_id" => 2
                ]
            ]
        );
        

        Project::create([
            'user_id' => 1,
            'name' => 'Disruptive styles',
            'description' => 'Do things we never believed we could do with CSS',
            'elevator_pitch' => 'Leave bootstrap. Hello Tailwindcss!',
            'github' => "https://github.com/ajthinking",
            'twitter' => null,
            'facebook' => null,
            'production_url' => null,
            'status' => 'PRODUCTION'
            ])->images()->createMany(
                [
                    [
                        'priority' => 1,
                        'url' => 'https://picsum.photos/500/100?image=4'
                    ],
                    [
                        'priority' => 2,
                        'url' => 'https://picsum.photos/500/100?image=5'
                    ],
                    [
                        'priority' => 3,
                        'url' => 'https://picsum.photos/500/100?image=6'
                    ],                                
                ]
            );
        
        Project::create([
            'user_id' => 1,
            'name' => 'AI blockchain customer analysis',
            'description' => 'Blockchain analysis for customer beavior',
            'elevator_pitch' => 'What do your users do on your pages? Transfer their actions using a blockchain platform out of this world.',
            'github' => "https://github.com/ajthinking",
            'twitter' => null,
            'facebook' => null,
            'production_url' => null,
            'status' => 'IDEA'
            ])->images()->createMany(
                [
                    [
                        'priority' => 1,
                        'url' => 'https://picsum.photos/500/100?image=7'
                    ],
                    [
                        'priority' => 2,
                        'url' => 'https://picsum.photos/500/100?image=8'
                    ],
                    [
                        'priority' => 3,
                        'url' => 'https://picsum.photos/500/100?image=9'
                    ],                                
                ]
            );
        */        
    }
}
