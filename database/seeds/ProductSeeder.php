<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'IPhone 13 pro',
            'price' => 1000,
            'category' => 'Mobile Phone',
            'description' => 'Latest IPhone on market',
            'gallery' => 'https://images.eprice.it/nobrand/0/hres/603/214230603/DAM214230603-4-c5da211c-bbb5-4cd6-9d39-3c63034ca91d.jpg'
        ]);
    }
}
