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

    	DB::table('projects')->delete();
    	DB::table('projects')->insert([
        	
        [ 'user_id' => 1, 'name' => 'Ziochat','description' => 'PHP-NodeJS based chat window application', 'created_at' => date("Y-m-d H:i:s")],
        [ 'user_id' => 1, 'name' => 'Bizuma','description' => 'Codeigniter based selling and buying platform for users', 'created_at' => date("Y-m-d H:i:s")],
        [ 'user_id' => 1, 'name' => 'Sharestates','description' => 'Codeigniter based crowd funding management app', 'created_at' => date("Y-m-d H:i:s")]

        ]);
    }
}
