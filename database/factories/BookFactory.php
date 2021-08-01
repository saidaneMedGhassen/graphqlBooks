<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Book::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->word(),
            'author' => $this->faker->name,
            'image' => $this->faker->imageUrl(640, 480, 'animals', true),
            'description' => $this->faker->text,
            'link' => $this->faker->imageUrl(640, 480, 'animals', true),
            'featured'=>(bool) mt_rand(0, 1),
            'category_id'=>$this->faker->numberBetween(1,10),
        ];
    }
}
