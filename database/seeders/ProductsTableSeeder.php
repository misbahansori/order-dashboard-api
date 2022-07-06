<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::insert([
            [
                'name'     => 'Preset Pack',
                'category' => 'pack',
                'color'    => 'blue',
                'price'    => 200,
            ],

            [
                'name'     => 'Swag Pack',
                'category' => 'pack',
                'color'    => 'custom',
                'price'    => 300,
            ],
            [
                'name'     => 'Bulk Swag',
                'category' => 'bulk',
                'color'    => 'custom',
                'price'    => 250,
            ],
        ]);
    }
}
