<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Project;
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
        
        for($i=0; $i<10; $i++){
            $newProject = new project();

            $newProject->project_title = $faker->sentence();
            $newProject->cover_img = $faker->imageUrl(640, 480, 'project', true, 'cats', false, 'png');
            $newProject->slug = $faker->word();

            $newProject->save();
        }
    }
}
