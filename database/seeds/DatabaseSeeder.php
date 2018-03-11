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
        $this->call(BusinessesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(Kat33sTableSeeder::class);
        $this->call(VehiclesTableSeeder::class);
        $this->call(ParamsTableSeeder::class);
        $this->call(ChecklistsTableSeeder::class);
        $this->call(RoutesTableSeeder::class);
        $this->call(FeedbacksTableSeeder::class);
        $this->call(TravelsTableSeeder::class);
    }
}
