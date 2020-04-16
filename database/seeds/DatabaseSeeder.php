<?php

use App\Product;
use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(ProductsTableSeeder::class);

        $user = factory(User::class)->create([
            'name' => 'Toko 1',
            'email' => 'toko1@app.com',
            'password' => bcrypt('12345678'),
        ]);

        factory(Product::class, 20)->create([
            'user_id' => $user->id,
        ]);
    }
}
