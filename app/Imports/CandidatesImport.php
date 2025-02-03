<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\OnEachRow;
use Maatwebsite\Excel\Concerns\ToArray;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Row;

class CandidatesImport implements OnEachRow, WithCalculatedFormulas, WithHeadingRow
{
    public function onRow(Row $row)
    {
        // $rowIndex = $row->getIndex();
        $row = $row->toArray(null, true);
    }
}
