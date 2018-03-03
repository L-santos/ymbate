<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        DB::table('comments')->truncate();
        DB::table('threads')->truncate();
        DB::table('pages')->truncate();
        DB::table('users')->truncate();

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        
        /**
         * Seed Users table
         */
         factory(App\User::class, 20)->create();

        /**
         * Seed pages table
         */
        factory(App\Page::class, 10)->create()->each(function ($page){
            $page->threads()->saveMany(
                factory(App\Thread::class, rand(2, 20))->create()->each(
                    function($thread)
                    {
                        $thread->comments()->saveMany(factory(App\Comment::class, rand(1, 15))->make());    
                    }
                )
            );
        });     
    }
}
