@extends('layouts.app')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Home</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                </ol>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="card mt-4">
        <div class="card-header bg-primary text-white">
            <h5 class="m-0">Decision Metric Visualisasi</h5>
        </div>

        <div class="card-body">
            @php $chartIndex = 1; $counter = 0; @endphp

        <div class="container-fluid">
            @foreach ($decision_metric as $kelas => $kelasData)
                @foreach ($kelasData as $kode => $kriteriaList)
                    @foreach ($kriteriaList as $kriteria)
                        @php
                            $nama_kriteria = collect($kriterias)->firstWhere('kode', $kriteria['kode_kriteria'])->nama ?? 'Nama tidak tersedia';
                            $canvasAwalId = 'chart_awal_' . $chartIndex;
                            $canvasUjiId = 'chart_uji_' . $chartIndex;
                        @endphp

                        {{-- Buka row baru setiap 2 item --}}
                        @if ($counter % 2 == 0)
                            <div class="row">
                        @endif

                        <div class="col-md-6">
                            <div class="card mb-4 p-3 shadow">
                                <h5>{{ $kriteria['nama_kriteria'] }} ({{ $nama_kriteria }})</h5>
                                <p>
                                    Kelas: <strong>{{ $kelas }}</strong><br>
                                    Bobot Awal: <strong>{{ $kriteria['bobot_awal'] }}</strong><br>
                                    Bobot Uji: <strong>{{ $kriteria['bobot_uji'] }}</strong><br>
                                    Ranking Berubah: <strong>{{ $kriteria['berubah'] ?? 'Tidak' }}</strong>
                                </p>

                                <div class="row">
                                    <div class="col-md-6">
                                        <canvas id="{{ $canvasAwalId }}" height="200"></canvas>
                                    </div>
                                    <div class="col-md-6">
                                        <canvas id="{{ $canvasUjiId }}" height="200"></canvas>
                                    </div>
                                </div>

                                {{-- Chart script --}}
                                <script>
                                    document.addEventListener('DOMContentLoaded', function () {
                                        const ctxAwal = document.getElementById('{{ $canvasAwalId }}').getContext('2d');
                                        const ctxUji = document.getElementById('{{ $canvasUjiId }}').getContext('2d');

                                        new Chart(ctxAwal, {
                                            type: 'pie',
                                            data: {
                                                labels: ['Bobot Awal', 'Sisa'],
                                                datasets: [{
                                                    data: [{{ $kriteria['bobot_awal'] }}, {{ 1 - $kriteria['bobot_awal'] }}],
                                                    backgroundColor: ['#36A2EB', '#E5E5E5']
                                                }]
                                            },
                                            options: {
                                                plugins: {
                                                    title: {
                                                        display: true,
                                                        text: 'Bobot Awal'
                                                    }
                                                }
                                            }
                                        });

                                        new Chart(ctxUji, {
                                            type: 'pie',
                                            data: {
                                                labels: ['Bobot Uji', 'Sisa'],
                                                datasets: [{
                                                    data: [{{ $kriteria['bobot_uji'] }}, {{ 1 - $kriteria['bobot_uji'] }}],
                                                    backgroundColor: ['#FF6384', '#E5E5E5']
                                                }]
                                            },
                                            options: {
                                                plugins: {
                                                    title: {
                                                        display: true,
                                                        text: 'Bobot Uji'
                                                    }
                                                }
                                            }
                                        });
                                    });
                                </script>
                            </div>
                        </div>

                        {{-- Tutup row setelah 2 item --}}
                        @php $counter++; @endphp
                        @if ($counter % 2 == 0)
                            </div>
                        @endif

                        @php $chartIndex++; @endphp
                    @endforeach
                @endforeach
            @endforeach

            {{-- Jika jumlah item ganjil, pastikan row terakhir ditutup --}}
            @if ($counter % 2 != 0)
                </div>
            @endif
        </div>
        </div>
    </div>
</section>
@include ('includes.script')
@endsection
