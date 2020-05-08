<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
                // Any other Fields in your Comments Model
                factory(\App\user :: class , 50)->create();

    }
}
