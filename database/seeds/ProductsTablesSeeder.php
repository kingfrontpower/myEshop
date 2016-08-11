<?php

use Illuminate\Database\Seeder;

class ProductsTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker\Factory::create("zh_TW");
        $name = ["牛仔褲", "上衣", "帽子"];
//        $price = [399, 499, 599, 699];

        for($i = 0; $i < 10; $i++) {
            $no = $faker->ean8;
            $product_name = $name[$faker->numberBetween(0, 2)];

            DB::table("products")->insert([
                "name" => "$product_name-$no",
                "title" => "$product_name-$no",
                "description" => $faker->realText(200),
                "price" => $faker->numberBetween(399, 899),
                "category_id" => 1,
                "brand_id" => 1,
                "created_at_ip" => $faker->ipv4,
                "updated_at_ip" => $faker->ipv4,
                "created_at" => $faker->date("Y-m-d", "now"),
                "updated_at" => $faker->date("Y-m-d", "now"),
            ]);
        }
    }
}
