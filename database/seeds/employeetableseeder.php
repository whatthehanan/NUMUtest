<?php

use Illuminate\Database\Seeder;

class employeetableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\employee::class,15)->create();
    }
}
