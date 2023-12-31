<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // $url = 'https://api.coldeyefitness.com' . '/uploads/users/';
        $url = 'http://127.0.0.1:8000' . '/uploads/users/';
        $pics = ['pic1.jpg', 'pic2.jpg', 'pic3.jpg', 'pic4.jpg', 'pic5.jpg', 'pic6.jpg'];
        // dd($url);
        return [
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName,
            'user_name' => $this->faker->firstName() . '_' . $this->faker->lastName,
            'mobile_number' => $this->faker->phoneNumber,
            'photo' => $url . $pics[array_rand($pics)],
            // 'photo' => $this->faker->imageUrl(100,100),
            'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'),
            'remember_token' => Str::random(10),
        ];
    }
}
