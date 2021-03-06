
<?php

use Illuminate\Database\Seeder;
use App\Comic;
use Faker\Generator as Faker;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $comics = config('seeder.comics');
        foreach ($comics as $item ) {

            $newComic = new Comic();
            $newComic->title = $item['title'];
            $newComic->price = $faker->randomFloat(2, 3, 70);
            $newComic->number_page = $faker->numberBetween(35, 100);
            $newComic->chapter = $faker->numberBetween(1, 1000);
            $newComic->rate = $faker->numberBetween(1, 1000);
            $newComic->cover = $item['cover'];
            $newComic->description = $faker->text(1000);
            $newComic->on_sale_date = $faker->date('Y_m_d');
            $newComic->available = $faker->boolean();
            $newComic->trim_size = $faker->randomElement(['6 5/8', '10 3/16']);


            $newComic->save();

        }
    }
}