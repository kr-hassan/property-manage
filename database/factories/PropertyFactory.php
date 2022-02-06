<?php

namespace Database\Factories;

use App\Models\Location;
use Illuminate\Database\Eloquent\Factories\Factory;

class PropertyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->name,
            'featured_image'=>'https://picsum.photos/1200/800',
            'location_id'=>Location::all()->random()->id,
            'price'=>rand(50000,500000),
            'sale'=>rand(0,1),
            'type'=>rand(0,2),
            'bedrooms'=>rand(1,6),
            'bathrooms'=>rand(1,3),
            'net_sqm'=>rand(55,300),
            'gross'=>rand(65,500),
            'pool'=>rand(0,3),
            'overview'=>$this->faker->text(100),
            'why_buy'=>$this->faker->text(1000),
            'description'=>$this->faker->text(500),
        ];
    }
}
