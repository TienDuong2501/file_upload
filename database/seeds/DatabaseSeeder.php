<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::transaction(function(){
        	factory(App\Post::class,10)->create(['content' => 'tung']);
	        factory(App\Author::class,10)->create();
	        factory(App\User::class,10)->create();
        });
    }
}
