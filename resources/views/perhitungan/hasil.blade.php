@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">HASIL PERHITUNGAN</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">Hasil Perhitungan</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
<section class="content">
  @if (isset($error))
  <div class="alert alert-danger" role="alert">
    {{$error}}
  </div>
  @else
  @if(isset($hasil_1['kriteria']) && isset($hasil_1['sub_kriteria']))
  <div class="card">
    <!-- /.card-header -->
    <div class="card-header">
      <h3 class="m-0 text-dark"><strong>HASIL</strong></h3>
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col-6">
          <div class="card">
            <!-- /.card-header -->
            <div class="card-header">
              <h3 class="m-0 text-dark"><strong>HASIL 1</strong></h3>
            </div>
            <div class="card-body">
              <table id="example1" class="table table-bordered">
                <tbody>
                  <tr>
                    @foreach (array_keys($hasil_1['kriteria']) as $kriteria)
                    <td class="bg-primary">
                    {{$kriteria}}
                    </td>
                    @endforeach
                  </tr>
                  <tr>
                    @foreach ($hasil_1['kriteria'] as $kriteria)
                    <td>
                    {{round($kriteria, 2)}}
                    </td>
                    @endforeach
                  </tr>
                  @foreach ($hasil_1['sub_kriteria'] as $xxx)
                  <tr class="bg-secondary">
                  @foreach ($xxx as $key => $sub)
                    <td>
                      {{$key}}
                    </td>
                  @endforeach
                  </tr>
                  <tr>
                  @foreach ($xxx as $key => $sub)
                    <td>
                      {{round($sub, 2)}}
                    </td>
                  @endforeach
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
        </div>
        <div class="col-6">
          <div class="card">
            <!-- /.card-header -->
            <div class="card-header">
              <h3 class="m-0 text-dark"><strong>HASIL 2</strong></h3>
            </div>
            <div class="card-body">
              <table id="example1" class="table table-bordered">
                <tbody>
                  @foreach ($hasil_2 as $key1 => $xxx)
                  <tr class="bg-secondary">
                  @foreach ($xxx as $key2 => $sub)
                    @if ($loop->first)
                    <td class="bg-primary">
                      {{$key1}}
                    </td>
                    @endif
                    <td>
                      {{$key2}}
                    </td>
                  @endforeach
                  </tr>
                  <tr>
                    <td class="bg-primary"></td>
                  @foreach ($xxx as $key3 => $sub)
                    <td>
                      {{round($sub, 2)}}
                    </td>
                  @endforeach
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="card">
    <!-- /.card-header -->
    <div class="card-header">
      <h3 class="m-0 text-dark"><strong>PERANGKINGAN</strong></h3>
    </div>
    <div class="card-body">
      <div class="card">
        <!-- /.card-header -->
        <div class="card-header">
          <h3 class="m-0 text-dark"><strong>Tabel Data Nilai Alternatif 1</strong></h3>
        </div>
        <div class="card-body">
          <table id="data-admin" class="table table-bordered">
            <thead>
              <th>NISN</th>
              @foreach (array_keys($hasil_1['kriteria']) as $head)
              <th>{{$head}}</th>
              @endforeach
            </thead>
            <tbody>
              @foreach ($nilai_alternatif as $key => $alt)
              <tr>
                <td>
                {{$alt['nisn']}}
                </td>
                @foreach ($alt['nilai'] as $key2 => $val)
                @foreach ($val as $key3 => $val3)
                <td>
                {{$key3}}
                </td>
                @endforeach
                @endforeach
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
      <div class="card">
        <!-- /.card-header -->
        <div class="card-header">
          <h3 class="m-0 text-dark"><strong>Tabel Data Nilai Alternatif 2</strong></h3>
        </div>
        <div class="card-body">
          <table id="data-admin-1" class="table table-bordered">
            <thead>
              <th>NISN</th>
              @foreach (array_keys($hasil_1['kriteria']) as $head)
              <th>{{$head}}</th>
              @endforeach
            </thead>
            <tbody>
                @foreach ($nilai_alternatif as $key => $alt)
              <tr>
                <td>
                {{$alt['nisn']}}
                </td>
                @foreach ($alt['nilai'] as $key2 => $val)
                @foreach ($val as $key3 => $val3)
                <td>
                {{round($val3, 2)}}
                </td>
                @endforeach
                @endforeach
              </tr>
                @endforeach
            </tbody>
          </table>
        </div>
      </div>
      <div class="card">
        <!-- /.card-header -->
        <div class="card-header">
          <h3 class="m-0 text-dark"><strong>Tabel Data Perangkingan</strong></h3>
        </div>
        <div class="card-body">
          <table id="data-admin-2" class="table table-bordered">
            <thead>
              <th>NAMA</th>
              @foreach (array_keys($hasil_1['kriteria']) as $head)
              <th>{{$head}}</th>
              @endforeach
              <th>Hasil</th>
              <th>Rangking</th>
            </thead>
            <tbody>
              @foreach ($perangkingan as $key => $alt)
              <tr>
                <td>{{$alt['nama']}} - {{$alt['nisn']}}</td>
                @foreach ($alt['nilai'] as $val)
                @foreach ($val as $val2)
                <td>{{round($val2, 2)}}</td>
                @endforeach
                @endforeach
                <td>{{round($alt['hasil'], 2)}}</td>
                <td>{{round($alt['rangking'], 2)}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
      <div class="card">
        <div class="card-header">
          <h3 class="m-0 text-dark"><strong>Analisis Sensitivitas</strong></h3>
          <p class="text-muted mb-0">Dampak perubahan bobot kriteria terhadap hasil perangkingan</p>
        </div>

        <div class="card-body">
            @foreach ($sensitivitas as $kode_kriteria => $data_sensitivitas)
                @php
                    $nama_kriteria = collect($kriterias)->firstWhere('kode', $kode_kriteria)->nama ?? 'Nama tidak tersedia';
                @endphp

                <h5 class="mt-4">
                    Kriteria: <strong>{{ $kode_kriteria }}</strong>
                    <small class="text-muted">({{ $nama_kriteria }})</small>
                </h5>

            <div class="table-responsive">
              <table class="table table-bordered table-sm">
                <thead class="table-secondary">
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Hasil Skor</th>
                    <th>Rangking</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($data_sensitivitas as $index => $siswa)
                    <tr>
                      <td>{{ $index + 1 }}</td>
                      <td>{{ $siswa['nama'] }}</td>
                      <td>{{ number_format($siswa['hasil'], 4) }}</td>
                      <td>{{ $siswa['rangking'] }}</td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          @endforeach
        </div>
      </div>
      <div class="card">
        <div class="card-header">
            <h4 class="m-0"><strong>Metrik Kualitatif</strong></h4>
            <small class="text-light">Indikator seperti transparansi dan kepuasan guru terhadap sistem perangkingan</small>
        </div>

        <div class="card-body">
            @foreach ($sensitivitas as $kode_kriteria => $data_sensitivitas)
                @php
                    $nama_kriteria = collect($kriterias)->firstWhere('kode', $kode_kriteria)->nama ?? 'Nama tidak tersedia';
                @endphp

                <h5 class="mt-5">Kriteria: <strong>{{ $kode_kriteria }}</strong>
                    <small class="text-muted">({{ $nama_kriteria }})</small>
                </h5>

                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>Nama Siswa</th>
                                <th>Nilai Awal</th>
                                <th>Nilai Sensitivitas</th>
                                <th>Perubahan Nilai</th>
                                <th>Rangking Awal</th>
                                <th>Rangking Baru</th>
                                <th>Perubahan Ranking</th>
                                <th>Transparansi</th>
                                <th>Kepuasan Guru</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data_sensitivitas as $index => $item)
                                @php
                                    $awal = collect($perangkingan)->firstWhere('nama', $item['nama']);
                                    $nilai_awal = $awal['hasil'] ?? 0;
                                    $rangking_awal = $awal['rangking'] ?? '-';
                                    $delta_nilai = round($item['hasil'] - $nilai_awal, 4);
                                    $delta_rank = $rangking_awal - $item['rangking'];

                                    // Penilaian kualitatif dummy (bisa diganti logika nyata jika ada)
                                    $transparansi = $delta_rank == 0 ? 'Tinggi' : ($delta_rank > 0 ? 'Cukup' : 'Rendah');
                                    $kepuasan = $item['rangking'] <= 3 ? 'Puas' : 'Perlu Evaluasi';
                                @endphp
                                <tr>
                                    <td>{{ $item['nama'] }}</td>
                                    <td>{{ $nilai_awal }}</td>
                                    <td>{{ $item['hasil'] }}</td>
                                    <td class="{{ $delta_nilai > 0 ? 'text-success' : 'text-danger' }}">
                                        {{ $delta_nilai > 0 ? '+' : '' }}{{ $delta_nilai }}
                                    </td>
                                    <td>{{ $rangking_awal }}</td>
                                    <td>{{ $item['rangking'] }}</td>
                                    <td class="{{ $delta_rank > 0 ? 'text-success' : ($delta_rank < 0 ? 'text-danger' : '') }}">
                                        {{ $delta_rank > 0 ? '+' : '' }}{{ $delta_rank }}
                                    </td>
                                    <td>{{ $transparansi }}</td>
                                    <td>{{ $kepuasan }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endforeach
        </div>
      </div>
      <div class="card">
        <div class="card-header bg-dark text-white">
            <h4 class="m-0"><strong>Decision Metric</strong></h4>
            <small class="text-light">Menunjukkan pengaruh perubahan bobot terhadap keputusan akhir</small>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th>Nama Kriteria</th>
                            <th>Bobot Awal</th>
                            <th>Bobot Uji (↑10%)</th>
                            <th>Rangking Awal</th>
                            <th>Rangking Setelah Perubahan</th>
                            <th>Perubahan Keputusan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($decision_metric as $item)
                            <tr>
                                <td>{{ $item['nama_kriteria'] }}</td>
                                <td>{{ $item['bobot_awal'] }}</td>
                                <td>{{ $item['bobot_uji'] }}</td>
                                <td>
                                    @foreach ($item['ranking_awal'] as $index => $nama)
                                        {{ $index + 1 }}. {{ $nama }}<br>
                                    @endforeach
                                </td>
                                <td>
                                    @foreach ($item['ranking_baru'] as $index => $nama)
                                        {{ $index + 1 }}. {{ $nama }}<br>
                                    @endforeach
                                </td>
                                <td class="{{ $item['berubah'] === 'Ya' ? 'text-danger' : 'text-success' }}">
                                    {{ $item['berubah'] }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
      </div>
      <div class="card">
        <!-- /.card-header -->
        <div class="card-header">
          <h3 class="m-0 text-dark"><strong>Grafik Data</strong></h3>
        </div>
        <div class="card-body">
            <label for="kriteria">Pilih Kriteria:</label>
            <select id="kriteria" class="form-control mb-4">
                @foreach ($kriterias as $k)
                    <option value="{{ $k->kode }}">{{ $k->kode }} - {{ $k->nama }}</option>
                @endforeach
            </select>
            <canvas id="barChart"></canvas>
            <canvas id="radarChart" class="mt-4"></canvas>
        </div>
      </div>
    </div>
  </div>
  @else
  <div class="alert alert-danger" role="alert">
    Data Belum Lengkap !
  </div>
  @endif
  @endif
</section>
@include ('includes.script')
<script>
  jQuery(document).ready(function($) {
      $(".clickable-row").click(function() {
          window.location = $(this).data("href");
      });
  });
</script>
<script>
    $('#tabel-sensitivitas').DataTable();
  $(function () {
    $("#data-admin-2").DataTable({
      "order": [[ 6, "asc" ]],
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "language": {
          "sEmptyTable":   "Tidak ada data yang tersedia pada tabel ini",
    "sProcessing":   "Sedang memproses...",
    "sLengthMenu":   "Tampilkan _MENU_ entri",
    "sZeroRecords":  "Tidak ditemukan data yang sesuai",
    "sInfo":         "Menampilkan _START_ sampai _END_ dari _TOTAL_ entri",
    "sInfoEmpty":    "Menampilkan 0 sampai 0 dari 0 entri",
    "sInfoFiltered": "(disaring dari _MAX_ entri keseluruhan)",
    "sInfoPostFix":  "",
    "sSearch":       "Cari:",
    "sUrl":          "",
    "oPaginate": {
        "sFirst":    "Pertama",
        "sPrevious": "Sebelumnya",
        "sNext":     "Selanjutnya",
        "sLast":     "Terakhir"
    }
        }
    });
  });
</script>
<script type="text/javascript">
$(document).ready(function(){
    // Append all paragraphs
    $("#data-admin-2_length").append('<a  href="{{ Request::url() }}/cetak"> <button type="button" class="btn btn-outline-primary ml-3">Export ke Excel</button></a>');
});
</script>

<script>
    const barDataPerKriteria = @json($bar_chart_per_kriteria);
    const radarDataPerKriteria = @json($radar_chart_per_kriteria);

    let barChartInstance, radarChartInstance;

    function renderCharts(kriteria) {
        const barData = barDataPerKriteria[kriteria] || [];
        const radarData = radarDataPerKriteria[kriteria] || [];

        const labels = barData.map(d => d.nama);
        const nilai = barData.map(d => d.nilai);

        const radarLabels = labels;
        const radarValues = radarData.map(d => d.nilai);

        // Destroy existing charts if needed
        if (barChartInstance) barChartInstance.destroy();
        if (radarChartInstance) radarChartInstance.destroy();

        // Bar chart
        const ctxBar = document.getElementById('barChart').getContext('2d');
        barChartInstance = new Chart(ctxBar, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Nilai Siswa untuk ' + kriteria,
                    data: nilai,
                    backgroundColor: 'rgba(75, 192, 192, 0.6)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        // Radar chart
        const ctxRadar = document.getElementById('radarChart').getContext('2d');
        radarChartInstance = new Chart(ctxRadar, {
            type: 'radar',
            data: {
                labels: radarLabels,
                datasets: [{
                    label: 'Radar - ' + kriteria,
                    data: radarValues,
                    fill: true,
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    pointBackgroundColor: 'rgba(255, 99, 132, 1)'
                }]
            },
            options: {
                responsive: true,
                elements: {
                    line: {
                        tension: 0.3
                    }
                }
            }
        });
    }

    // Default chart for first kriteria
    const defaultKriteria = document.getElementById('kriteria').value;
    renderCharts(defaultKriteria);

    // Update chart when kriteria changes
    document.getElementById('kriteria').addEventListener('change', function () {
        renderCharts(this.value);
    });
</script>

@endsection
