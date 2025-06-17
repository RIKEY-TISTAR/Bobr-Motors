<?php

namespace Database\Seeders;

use App\Models\Hero;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $heroes = [
            [
                'hero-images' => null,
                'hero-images-two' => null,
                'title' => 'Автомастерская',
                'title-two' => 'Автомастерская',
                'description' => 'Оставьте заявку на сайте через форму обратной связи и получите скидку на техническое обслуживание вашего авто',
                'description-two' => 'Оставьте заявку на сайте через форму обратной связи и получите скидку на техническое обслуживание вашего авто'
            ]
        ];

        foreach ($heroes as $hero) {
            Hero::create($hero);
        }
    }
}
