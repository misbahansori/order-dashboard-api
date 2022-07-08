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
                'image_url' => 'img/preset-pack.png',
            ],

            [
                'name'     => 'Swag Pack',
                'category' => 'pack',
                'color'    => 'custom',
                'price'    => 300,
                'image_url' => 'img/swag-pack.png'
            ],
            [
                'name'     => 'Bulk Swag',
                'category' => 'bulk',
                'color'    => 'custom',
                'price'    => 250,
                'image_url' => 'img/bulk-swag.png'
            ],
            [
                'name'     => 'Swag -- Pack',
                'category' => 'pack',
                'color'    => 'blue',
                'price'    => 75,
                'image_url' => null,
            ],
            [
                'name'     => 'Tech Pack -- Pack',
                'category' => 'pack',
                'color'    => 'blue',
                'price'    => 65,
                'image_url' => null,
            ],
            [
                'name'     => 'Bella + Canvas Tee',
                'category' => 'pack',
                'color'    => 'blue',
                'price'    => 14,
                'image_url' => null,
            ],
            [
                'name'     => 'Nike Cap',
                'category' => 'pack',
                'color'    => 'blue',
                'price'    => 32,
                'image_url' => null,
            ],
            [
                'name'     => 'Swag Pack + Nike Cap',
                'category' => 'pack',
                'color'    => 'blue',
                'price'    => 310,
                'image_url' => null,
            ],
            [
                'name'     => 'Swag Pack + Red Cap',
                'category' => 'pack',
                'color'    => 'blue',
                'price'    => 30,
                'image_url' => null,
            ],
            [
                'name'     => 'Swag Pack + Canvas Tee',
                'category' => 'pack',
                'color'    => 'blue',
                'price'    => 330,
                'image_url' => null,
            ],
        ]);
    }
}
