<?php

use Illuminate\Database\Seeder;
use App\Models\questions;

class questionsTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        factory(questions::class, 10)->create();
    }

}
