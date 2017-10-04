<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = new \Faker\Factory();

        DB::table('projects')->insert([
            'name' => $faker->create()->sentence(3),
            'description' =>$faker->create()->sentence(150),
            'deadline'  => $faker->create()->dateTimeBetween('now', '2 years'),
            'completed' => 0,
            'started'   => \Carbon\Carbon::now()
        ]);

        DB::table('projects')->insert([
            'name' => $faker->create()->sentence(3),
            'description' =>$faker->create()->sentence(150),
            'deadline'  => $faker->create()->dateTimeBetween('now', '2 years'),
            'completed' => 0,
            'started'   => \Carbon\Carbon::yesterday()
        ]);

    }
}
