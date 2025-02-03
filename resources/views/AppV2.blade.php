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
        <div class="flex flex-row justify-between w-full">
            <h1 class="text-lg font-bold">Halow ini testing ajah {{ $test }}</h1>
            {{-- <h1 class="text-lg font-light">V2</h1> --}}
            <a
            href="{{ route('App') }}"
            class="text-lg font-normal hover:font-bold"
                >V1
            </a>
        </div>
        <div class="mt-10 mb-5 overflow-x-auto">
            <table class="w-full table-auto">
                <thead>
                    <tr>
                        <th class="px-4 py-2 font-normal border text-md" rowspan="3">No.</th>
                        <th class="px-4 py-2 font-normal border text-md" rowspan="3">No SBG</th>
                        <th class="px-4 py-2 font-normal border text-md" rowspan="3">Nama Nasabah</th>
                        <th class="px-4 py-2 font-normal border text-md" rowspan="3">OVD</th>
                        <th class="px-4 py-2 font-normal border text-md" rowspan="3">Item</th>
                        <th class="px-4 py-2 font-normal border text-md" rowspan="3">Deskripsi BJ</th>
                        <th class="px-4 py-2 font-normal border text-md" colspan="7">Unit</th>
                        <th class="px-4 py-2 font-normal border text-md" colspan="9">Internal Audit</th>
                        <th class="px-4 py-2 font-normal border text-md" colspan="3">Variance</th>
                    </tr>
                    <tr>
                        <th class="px-4 py-2 font-normal border text-md" colspan="3">Berat</th>
                        <th class="px-4 py-2 font-normal border text-md" colspan="4">Karat</th>
                        <th class="px-4 py-2 font-normal border text-md" colspan="3">Berat</th>
                        <th class="px-4 py-2 font-normal border text-md" colspan="4">Karat</th>
                        <th class="px-4 py-2 font-normal border text-md" rowspan="2">PIC</th>
                        <th class="px-4 py-2 font-normal border text-md" rowspan="2">Jenis Emas</th>
                        <th class="px-4 py-2 font-normal border text-md" rowspan="2">Berat</th>
                        <th class="px-4 py-2 font-normal border text-md" colspan="2">Karat</th>
                    </tr>
                    <tr>
                        <th class="px-4 py-2 font-normal border text-md">Kotor</th>
                        <th class="px-4 py-2 font-normal border text-md">Batu</th>
                        <th class="px-4 py-2 font-normal border text-md">Emas</th>
                        <th class="px-4 py-2 font-normal border text-md">Vol</th>
                        <th class="px-4 py-2 font-normal border text-md">Density</th>
                        <th class="px-4 py-2 font-normal border text-md">AK</th>
                        <th class="px-4 py-2 font-normal border text-md">BJ</th>
                        <th class="px-4 py-2 font-normal border text-md">Kotor</th>
                        <th class="px-4 py-2 font-normal border text-md">Batu</th>
                        <th class="px-4 py-2 font-normal border text-md">Emas</th>
                        <th class="px-4 py-2 font-normal border text-md">Vol</th>
                        <th class="px-4 py-2 font-normal border text-md">Density</th>
                        <th class="px-4 py-2 font-normal border text-md">AK</th>
                        <th class="px-4 py-2 font-normal border text-md">BJ</th>
                        <th class="px-4 py-2 font-normal border text-md">AK</th>
                        <th class="px-4 py-2 font-normal border text-md">BJ</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($candidates as $nasabah)
                        <tr>
                            <td class="px-4 py-2 font-normal text-center border text-md">{{ $i++ }}</td>
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
