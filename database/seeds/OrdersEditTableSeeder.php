<?php

use Illuminate\Database\Seeder;

class OrdersEditTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\OrderEdit::class, 20) -> create();
    }
}
