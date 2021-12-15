<?php

namespace Database\Factories;

use App\Models\Produit;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProduitFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Produit::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'photo'=>$this->faker->text,
            'nom_de_produit'=>$this->faker->text,
            'prix'=>$this->faker->text,
            'description_produit'=>$this->faker->text,
            'category_type'=>$this->faker->text,
        ];
    }
}
