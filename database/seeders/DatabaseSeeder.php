<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Storage;
use App\Models\Shipping;
use Illuminate\Database\Seeder;
use Database\Seeders\OrdersTableSeeder;
use Database\Seeders\ProductsTableSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'password' => bcrypt('password'),
        ]);

        Shipping::factory()->count(rand(4, 10))->create();
        Storage::factory()->count(rand(2, 6))->create();

        $this->call(ProductsTableSeeder::class);
        $this->call(OrdersTableSeeder::class);
    }
}
