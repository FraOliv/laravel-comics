<?php

use Illuminate\Database\Seeder;
use App\Author;
use Faker\Generator as Faker;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run(Faker $faker)
    {
        for ($i = 0; $i < 5; $i++) {
            $newAuthor = new Author();
            $newAuthor->firstname = $faker->name();
            $newAuthor->surname = $faker->name();
            $newAuthor->agency = $faker->name();
            $newAuthor->save();      
         }
    }
    }

