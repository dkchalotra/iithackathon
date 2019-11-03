<?php

use Illuminate\Database\Seeder;

class MealTimesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\MealTime::class, 15)->create();
    }
}
