<?php

use Illuminate\Database\Seeder;

class project_user_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 8; $i++)
        {
            DB::table('project_user')->insert([
                'project_id'    => random_int(1, 2),
                'user_id'       => random_int(1, 50),
                'teamlead'      => 0
            ]);
        }
    }
}
