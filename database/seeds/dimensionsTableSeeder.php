<?php

use Illuminate\Database\Seeder;
use App\Models\dimensions;

class dimensionsTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        factory(dimensions::class, 10)->create();
    }

}
