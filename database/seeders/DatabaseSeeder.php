<?php

namespace Database\Seeders;

use App\Models\Location;
use App\Models\Media;
use App\Models\Property;
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
//         \App\Models\User::factory(10)->create();
         Location::factory(10)->create();
         Property::factory(50)->create();
         Media::factory(500)->create();
    }
}
