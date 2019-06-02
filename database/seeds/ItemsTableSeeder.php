<?php

use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ( $i = 0; $i < 20; $i++) {
            DB::table('items')->insert([
                'title' => Str::random(10),
                'description' => Str::random(30),
            ]);
        }

    }
}
