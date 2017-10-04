<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i <= 50; $i++)
        {
            $faker = new \Faker\Factory();
            $name = $faker->create()->userName;
            DB::table('users')->insert([
                'name'      => $name,
                'email'     => $name . '@barroc.it',
                'password'  => bcrypt('geheim')
            ]);
        }
    }
}
