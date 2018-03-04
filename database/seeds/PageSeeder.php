<?php

use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
