<?php

namespace Database\Seeders;

use Illuminate\Database\Eloquent\Concerns\QueriesRelationships;
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
       $this->call([
           CategorySeeder::class,
           LectureSeeder::class,
           QuestionSeeder::class,
           QuestionAnswerSeeder::class
       ]);
    }
}
