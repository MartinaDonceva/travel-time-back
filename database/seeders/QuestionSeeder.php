<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = Category::find(1);
        $category->questions()->createMany(collect([
            [
                'text' => 'Во кој дел на Македонија е сместена Шар Планина?'
            ],
            [
                'text' => 'Традиционалното меѓународно искачување на Голем Кораб се одржува на кој датум?'
            ],
            [
                'text' => 'Кој е највисокиот врв на планината Баба?'
            ]
        ]));
        $category = Category::find(2);
        $category->questions()->createMany(collect([
            [
                'text' => 'Колкава е површината на Дојранското езеро?'
            ],
            [
                'text' => 'Кое е најстарото езеро на нашиот континент?'
            ],
            [
                'text' => 'Како се нарекува единствениот остров во Македонија?'
            ]
        ]));
        $category = Category::find(3);
        $category->questions()->createMany(collect([
            [
                'text' => 'Низ кој град поминува реката Вардар?'
            ],
            [
                'text' => 'Колку е долга Струмичката река?'
            ],
            [
                'text' => 'Кој датум се обележува како „Ден на реката Црн Дрим“?'
            ]
        ]));
        $category = Category::find(4);
        $category->questions()->createMany(collect([
            [
                'text' => 'Колку е висок споменикот Воин на коњ во градот Скопје?'
            ],
            [
                'text' => 'Кој град во Македонија е познат како „Град на светлината“?'
            ],
            [
                'text' => 'Колку средновековни кули има во Кратово?'
            ]
        ]));
    }
}
