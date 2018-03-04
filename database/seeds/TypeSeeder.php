<?php

use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('types')->insert([
            ['id' => 1, 'value' => 'public'],
            ['id' => 2, 'value' => 'restricted'],
            ['id' => 3, 'value' => 'private' ],
        ]);
    }
}
