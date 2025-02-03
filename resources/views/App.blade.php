@php
    function convertToRange($v) {
        $v = min($v, 1);

        $min = 300;
        $max = 850;

        return $min + ($max-$min) *  $v;
    }
@endphp

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Excel Explore</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=poppins:200,200i,400,400i,700,700i" rel="sylesheet" />

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>
<body class="text-white bg-gray-800">
    <div class="w-4/5 mx-auto mt-10">
        <h1 class="text-lg font-bold">Halow ini testing ajah {{ $test }}</h1>
        <div class="mt-10 mb-5 overflow-x-auto">
            <table class="w-full table-auto">
                <thead>
                    <tr>
                        <th class="px-4 py-2 font-normal border text-md">Name</th>
                        <th class="px-4 py-2 font-normal border text-md">Net Worth</th>
                        <th class="px-4 py-2 font-normal border text-md">Income</th>
                        <th class="px-4 py-2 font-normal border text-md">Debt</th>
                        <th class="px-4 py-2 font-normal border text-md">Credit Score</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($candidates as $candidate)
                        <tr>
                            <td class="px-4 py-2 font-normal border text-md">{{ $candidate->name }}</td>
                            <td class="px-4 py-2 font-normal border text-md">{{ 'Rp ' . number_format($candidate->netWorth, 0, ',', '.') }}</td>
                            <td class="px-4 py-2 font-normal border text-md">{{ 'Rp ' . number_format($candidate->income, 0, ',', '.') }}</td>
                            <td class="px-4 py-2 font-normal border text-md">{{ 'Rp ' . number_format($candidate->debt, 0, ',', '.') }}</td>
                            <td class="px-4 py-2 font-normal border text-md">{{ round(convertToRange($candidate->creditScore)) }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <a
        href="{{ route('CandidatesExport') }}"
        class="px-4 py-2 mt-10 mr-2 font-normal bg-green-500 rounded hover:bg-green-700"
            >Download Excel
        </a>
        <a
        id="openModal"
        class="px-4 py-2 mt-10 font-normal bg-blue-500 rounded cursor-pointer hover:bg-blue-700"
        >Import</a>
        @include('Import')
    </div>
</body>
</html>
