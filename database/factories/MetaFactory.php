<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Kolossal\Multiplex\Meta;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class MetaFactory extends Factory
{
    protected $model = Meta::class;

    public function definition()
    {
        return [
            'key' => $this->faker->domainWord(),
            'value' => $this->faker->randomNumber(5),
        ];
    }
}
