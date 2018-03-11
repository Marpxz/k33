<?php

use Illuminate\Database\Seeder;

class Kat33sTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\Kat33\Kat33::class, 50)->create();

    }
}
