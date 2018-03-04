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

        DB::table('types')->truncate();
        DB::table('comments')->truncate();
        DB::table('threads')->truncate();
        DB::table('pages')->truncate();
        DB::table('users')->truncate();

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        
        $this->call([
            TypeSeeder::class,
            UserSeeder::class,
            PageSeeder::class,
        ]);
    }
}
