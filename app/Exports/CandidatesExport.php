<?php

namespace App\Exports;

use App\Models\Candidate;
use Generator;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromGenerator;
use Maatwebsite\Excel\Concerns\WithHeadings;

class CandidatesExport implements FromGenerator, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    // public function collection()
    // {
    //     return Candidate::all();
    // }

    use Exportable;

    public function generator(): Generator
    {
        $candidates = Candidate::all();
        $rowIndex = 2;
        foreach($candidates as $candidate) {
            yield [
                $candidate->id,
                $candidate->name,
                $candidate->netWorth,
                $candidate->income,
                $candidate->debt,
                $candidate->creditScore,
                "=(D{$rowIndex}/C{$rowIndex})+(D{$rowIndex}/E{$rowIndex})"
            ];
            $rowIndex++;
        }
    }

    public function headings(): array{
        return [
            'id',
            'name',
            'netWorth',
            'income',
            'debt',
            'creditScore',
            'creditScoreFormula'
        ];
    }
}
