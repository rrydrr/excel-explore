<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\nasabahAudit>
 */
class NasabahAuditFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $beratKotor = $this->faker->randomFloat(5, 0.2, 5);
        $beratBatu = $this->faker->randomFloat(5, 0.1, 5);

        while ($beratKotor < $beratBatu) {
            $beratKotor = $this->faker->randomFloat(5, 0.2, 5);
            $beratBatu = $this->faker->randomFloat(5, 0.1, 5);
        }

        $berat = $beratKotor - $beratBatu;
        $karat = rand(1, 24);

        return [
            'noSbg' => rand(1000000, 9999999),
            'nama' => fake('id_ID')->name(),
            'overdue' => rand(0, 10),
            'deskripsi' => 'Lorem ipsum dolor sit amet',
            'beratKotor' => $beratKotor,
            'beratBatu' => $beratBatu,
            'beratEmas' => $berat,
            'karatVol' => $karat,
            'karatDensity' => round($berat / $karat, 5),
            'karatAK' => rand(1, 24),
            'karatBJ' => rand(1, 24),
        ];
    }
}
