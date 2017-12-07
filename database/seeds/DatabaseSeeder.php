<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        User::unguard();
        Product::unguard();

        DB::table("users")->delete();
        DB::table("products")->delete();

        $users = [
          ["name" => "Chatthana Janethanakarn", "email" => "chattana.j@gmail.com", "password" => Hash::make("secret")],
        ];

        $products = [
          ["name" => "Tyler Medison's bat", "sku" => "BTB-0001", "description" => "This is Tyler's best bat", "price" => 990, "cover_image_path" => "none"],
        ];

        foreach ($users as $user) {
          User::create($user);
        }

        foreach ($products as $product) {
          Product::create($product);
        }

        User::reguard();
        Product::reguard();
    }
}
