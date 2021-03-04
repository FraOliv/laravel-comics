<?php

use Illuminate\Database\Seeder;
use App\Serie;
use Faker\Generator as Faker;

class SerieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $series = config('seeder.series');
        foreach ($series as $item) {

            $newSerie = new Serie();
            $newSerie->title = $item['title'];
            $newSerie->cover = $item['cover'];
            $newSerie->save();
        }
    }
}
