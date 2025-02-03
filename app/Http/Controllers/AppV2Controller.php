<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use Illuminate\Http\Request;

class AppV2Controller extends Controller
{
    public function index() {
        $data['test'] = 1;
        $data['candidates'] = Candidate::all();

        return view('AppV2', $data);
    }
}
