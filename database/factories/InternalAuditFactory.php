<?php

namespace Database\Factories;

use App\Models\InternalAudit; // Adjust the namespace according to your model
use App\Models\NasabahAudit; // Import the NasabahAudit model
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

class InternalAuditFactory extends Factory
{
    protected $model = InternalAudit::class; // Specify the model

    public function definition(): array
    {
        $jenisEmasOptions = ['perhiasan', 'batangan', 'lainnya'];

        $nasabahAudit = NasabahAudit::factory()->create();

        $beratKotor = $this->faker->randomFloat(5, 0.2, 5);
        $beratBatu = $this->faker->randomFloat(5, 0.1, 5);

        while ($beratKotor < $beratBatu) {
            $beratKotor = $this->faker->randomFloat(5, 0.2, 5);
            $beratBatu = $this->faker->randomFloat(5, 0.1, 5);
        }

        $berat = $beratKotor - $beratBatu;
        $karat = rand(1, 24);

        return [
            'idNasabahAudit' => $nasabahAudit->id,
            'idAuditor' => rand(1, 3),
            'beratKotor' => $beratKotor,
            'beratBatu' => $beratBatu,
            'beratEmas' => $berat,
            'karatVol' => $karat,
            'karatDensity' => round($berat / $karat, 5),
            'karatAK' => rand(1, 24),
            'karatBJ' => rand(1, 24),
            'jenisEmas' => Arr::random($jenisEmasOptions),
        ];
    }
}
