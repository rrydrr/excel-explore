<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\candidate>
 */
class CandidateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $netWorth = $this->faker->randomNumber(9, false);
        $income = $this->faker->randomNumber(7, false);
        $debt = $this->faker->randomNumber(8, false);
        $debtRatio = $income / $debt;
        $incomeRatio =  $income / $netWorth;

        return [
            'name' => $this->faker->name(),
            'netWorth' => $netWorth,
            'income' => $income,
            'debt' => $debt,
            'creditScore' => round($debtRatio + $incomeRatio, 3)
        ];
    }
}
