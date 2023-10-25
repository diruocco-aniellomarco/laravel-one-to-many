<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use illuminate\Support\Str;

use Faker\Generator as Faker;
class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 100; $i++) {
            $project = new Project();
            $project->name = $faker->name;
            $project->description = $faker->paragraph(2, false);
            $project->link = $faker->url;
            $project->slug = Str::slug($project->name);
            $project->save();
        }
    }
}
