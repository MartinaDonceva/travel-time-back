<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionAnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $question = Question::find(1);
        $question->question_answers()->createMany(collect([
            [
                'text' => 'Јужен'
            ],
            [
                'text' => 'Североисточен'
            ],
            [
                'text' => 'Северозападен',
                'correct' => true
            ],
            [
                'text' => 'Западен'
            ],
        ]));

        $question = Question::find(2);
        $question->question_answers()->createMany(collect([
            [
                'text' => '2 август'
            ],
            [
                'text' => '8 септември',
                'correct' => true
            ],
            [
                'text' => '6 јуни'
            ],
            [
                'text' => '6 септември'
            ],
        ]));
        $question = Question::find(3);
        $question->question_answers()->createMany(collect([
            [
                'text' => 'Пелистер',
                'correct' => true
            ],
            [
                'text' => 'Јакупица'
            ],
            [
                'text' => 'Титов Врв'
            ],
            [
                'text' => 'Солунска глава'
            ],
        ]));
        $question = Question::find(4);
        $question->question_answers()->createMany(collect([
            [
                'text' => '50,3 km2'
            ],
            [
                'text' => '43,1 km2',
                'correct' => true
            ],
            [
                'text' => '40,1 km2'
            ],
            [
                'text' => '43,2 km2'
            ],
        ]));
        $question = Question::find(5);
        $question->question_answers()->createMany(collect([
            [
                'text' => 'Дојранско езеро'
            ],
            [
                'text' => 'Преспанско езеро'
            ],
            [
                'text' => 'Охридско езеро',
                'correct' => true
            ],
            [
                'text' => 'Мавровско езеро'
            ],
        ]));
        $question = Question::find(6);
        $question->question_answers()->createMany(collect([
            [
                'text' => 'Мал град'
            ],
            [
                'text' => 'Преспански град'
            ],
            [
                'text' => 'Голем град',
                'correct' => true
            ],
            [
                'text' => 'Мало село'
            ],
        ]));
        $question = Question::find(7);
        $question->question_answers()->createMany(collect([
            [
                'text' => 'Штип'
            ],
            [
                'text' => 'Свети Николе'
            ],
            [
                'text' => 'Кочани'
            ],
            [
                'text' => 'Велес',
                'correct' => true
            ],
        ]));
        $question = Question::find(8);
        $question->question_answers()->createMany(collect([
            [
                'text' => '200 km'
            ],
            [
                'text' => '115 km'
            ],
            [
                'text' => '114 km',
                'correct' => true
            ],
            [
                'text' => '116 km'
            ],
        ]));
        $question = Question::find(9);
        $question->question_answers()->createMany(collect([
            [
                'text' => '6 мај',
                'correct' => true
            ],
            [
                'text' => '4 мај'
            ],
            [
                'text' => '8 септември'
            ],
            [
                'text' => '11 октомври'
            ],
        ]));
        $question = Question::find(10);
        $question->question_answers()->createMany(collect([
            [
                'text' => '13,5 метри'
            ],
            [
                'text' => '14,6 метри'
            ],
            [
                'text' => '14,5 метри',
                'correct' => true
            ],
            [
                'text' => '15,5 метри'
            ],
        ]));
        $question = Question::find(11);
        $question->question_answers()->createMany(collect([
            [
                'text' => 'Штип'
            ],
            [
                'text' => 'Струмица'
            ],
            [
                'text' => 'Кичево'
            ],
            [
                'text' => 'Охрид',
                'correct' => true
            ],
        ]));
        $question = Question::find(12);
        $question->question_answers()->createMany(collect([
            [
                'text' => '10'
            ],
            [
                'text' => '17',
                'correct' => true
            ],
            [
                'text' => '20'
            ],
            [
                'text' => '13'
            ],
        ]));
    }
}
