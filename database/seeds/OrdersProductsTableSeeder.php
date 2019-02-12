<?php

use Illuminate\Database\Seeder;

class OrdersProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\OrderProducts::class, 40) -> create();
    }
}
