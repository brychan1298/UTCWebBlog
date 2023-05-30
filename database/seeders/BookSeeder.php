<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        for ($i=0; $i < 15; $i++) {
            $randN = mt_rand(10,40);
            Book::create([
                "subTitle" => $faker->sentence(2),
                "title" => $faker->sentence(9),
                "description" => $faker->sentence(15),
                "author" => $faker->name(),
                "body" => $faker->paragraph($randN),
                "time" => $randN,
                "like" => mt_rand(10,100),
                "image" => $faker->imageUrl(640, 480, 'books', true),
                "date" => $faker->date()
            ]);
        }
    }
}
