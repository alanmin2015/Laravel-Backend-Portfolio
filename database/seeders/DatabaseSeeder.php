<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Type;
use App\Models\Project;
use App\Models\Entry;
use App\Models\Topic;
use App\Models\Skill;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::truncate();
        Type::truncate();
        Project::truncate();
        Entry:: truncate();
        Topic::truncate();
        Skill::truncate();

        User::factory()->count(2)->create();
        Type::factory()->count(3)->create();
        Topic::factory()->count(4)->create();
        Skill::factory()->count(6)->create();
        Project::factory()->count(4)->create()->each(function($project){
            $skills = Skill::all()->random(rand(1,2) )->pluck('id');
            $project->skills()->attach($skills);
        });
        Entry::factory()->count(4)->create()->each(function($entry){
            $topics = Topic::all()->random(rand(1,2) )->pluck('id');
            $entry->topics()->attach($topics);
        });
    }
}
