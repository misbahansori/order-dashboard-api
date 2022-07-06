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
            [
                'name'     => 'Swag -- Pack',
                'category' => 'pack',
                'color'    => 'blue',
                'price'    => 75,
            ],
            [
                'name'     => 'Tech Pack -- Pack',
                'category' => 'pack',
                'color'    => 'blue',
                'price'    => 65,
            ],
            [
                'name'     => 'Bella + Canvas Tee',
                'category' => 'pack',
                'color'    => 'blue',
                'price'    => 14,
            ],
            [
                'name'     => 'Nike Cap',
                'category' => 'pack',
                'color'    => 'blue',
                'price'    => 32,
            ],
            [
                'name'     => 'Swag Pack + Nike Cap',
                'category' => 'pack',
                'color'    => 'blue',
                'price'    => 310,
            ],
            [
                'name'     => 'Swag Pack + Red Cap',
                'category' => 'pack',
                'color'    => 'blue',
                'price'    => 30,
            ],
            [
                'name'     => 'Swag Pack + Canvas Tee',
                'category' => 'pack',
                'color'    => 'blue',
                'price'    => 330,
            ],
        ]);
    }
}
