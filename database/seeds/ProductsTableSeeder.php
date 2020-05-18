<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'MacBook Pro',
            'slug' => 'macbook-pro',
            'details' => '15 inch, 1tb SSD 32GB RAM',
            'price' => '23.44',
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit, sit reprehenderit. Excepturi quae deleniti maiores voluptate, voluptatum, asperiores, quidem voluptas',

        ]);

        Product::create([
            'name' => 'Laptop Pro',
            'slug' => 'laptop-pro',
            'details' => '15 inch, 1tb SSD 32GB RAM',
            'price' => '23.44',
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit, sit reprehenderit. Excepturi quae deleniti maiores voluptate, voluptatum, asperiores, quidem voluptas',

        ]);

        Product::create([
            'name' => 'HP Pro',
            'slug' => 'hp-pro',
            'details' => '15 inch, 1tb SSD 32GB RAM',
            'price' => '23.44',
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit, sit reprehenderit. Excepturi quae deleniti maiores voluptate, voluptatum, asperiores, quidem voluptas',

        ]);

        Product::create([
            'name' => 'ASUS Pro',
            'slug' => 'asus-pro',
            'details' => '15 inch, 1tb SSD 32GB RAM',
            'price' => '23.44',
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit, sit reprehenderit. Excepturi quae deleniti maiores voluptate, voluptatum, asperiores, quidem voluptas',

        ]);

        Product::create([
            'name' => 'TOSHIBA Pro',
            'slug' => 'toshiba-pro',
            'details' => '15 inch, 1tb SSD 32GB RAM',
            'price' => '23.44',
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit, sit reprehenderit. Excepturi quae deleniti maiores voluptate, voluptatum, asperiores, quidem voluptas',

        ]);

        Product::create([
            'name' => 'LAST Pro',
            'slug' => 'last-pro',
            'details' => '15 inch, 1tb SSD 32GB RAM',
            'price' => '23.44',
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit, sit reprehenderit. Excepturi quae deleniti maiores voluptate, voluptatum, asperiores, quidem voluptas',

        ]);
    }
}
