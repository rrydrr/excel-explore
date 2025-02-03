<?php

namespace App\Http\Controllers;

use App\Exports\CandidatesExport;
use App\Imports\CandidatesImport;
use App\Models\Candidate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Facades\Excel;

class AppController extends Controller
{
    public function index() {
        $data['test'] = 1;
        $data['candidates'] = Candidate::all();

        return view('App', $data);
    }

    public function candidatesExport() {
        return Excel::download(new CandidatesExport, 'candidates.xlsx');
    }

    public function candidatesImport(Request $request) {
        $request->validate([
            'excel' => 'required|file|mimes:xlsx,xls,csv'
        ]);
        if($request->hasFile('excel')) {
            $file = $request->file('excel');
            $data = Excel::toArray(new CandidatesImport, $file)[0];
            // dd($data);
            foreach($data as $candidate) {
                // Candidate::find($candidate['id'])->updateOrCreate([
                //     'netWorth' => $candidate['networth'],
                //     'income' => $candidate['income'],
                //     'debt' => $candidate['debt'],
                //     'creditScore' => $candidate['creditscoreformula'],
                // ]);
                Candidate::updateOrCreate(
                    ['id' => $candidate['id']],
                    [
                        'name' => $candidate['name'],
                        'netWorth' => $candidate['networth'],
                        'income' => $candidate['income'],
                        'debt' => $candidate['debt'],
                        'creditScore' => $candidate['creditscoreformula'],
                ]);
            }
        }

        return redirect()->route('App')->with('success', 'Candidates imported successfully!');
    }
}
