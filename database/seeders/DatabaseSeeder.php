<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        // blogs::factory(10)->create();

        // $this->call(userroletable::class);
        $this->call(ReviewSeeder::class);
        // \App\Models\blogs::factory(10)->create();

    }
}
