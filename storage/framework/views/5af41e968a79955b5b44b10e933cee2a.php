<?php $__env->startSection('content'); ?>
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
  <?php if(isset($error)): ?>
  <div class="alert alert-danger" role="alert">
    <?php echo e($error); ?>

  </div>
  <?php else: ?>
  <?php if(isset($hasil_1['kriteria']) && isset($hasil_1['sub_kriteria'])): ?>
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
                    <?php $__currentLoopData = array_keys($hasil_1['kriteria']); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kriteria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <td class="bg-primary">
                    <?php echo e($kriteria); ?>

                    </td>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tr>
                  <tr>
                    <?php $__currentLoopData = $hasil_1['kriteria']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kriteria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <td>
                    <?php echo e(round($kriteria, 2)); ?>

                    </td>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tr>
                  <?php $__currentLoopData = $hasil_1['sub_kriteria']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $xxx): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr class="bg-secondary">
                  <?php $__currentLoopData = $xxx; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <td>
                      <?php echo e($key); ?>

                    </td>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tr>
                  <tr>
                  <?php $__currentLoopData = $xxx; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <td>
                      <?php echo e(round($sub, 2)); ?>

                    </td>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                  <?php $__currentLoopData = $hasil_2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key1 => $xxx): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr class="bg-secondary">
                  <?php $__currentLoopData = $xxx; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key2 => $sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($loop->first): ?>
                    <td class="bg-primary">
                      <?php echo e($key1); ?>

                    </td>
                    <?php endif; ?>
                    <td>
                      <?php echo e($key2); ?>

                    </td>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tr>
                  <tr>
                    <td class="bg-primary"></td>
                  <?php $__currentLoopData = $xxx; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key3 => $sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <td>
                      <?php echo e(round($sub, 2)); ?>

                    </td>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
              <?php $__currentLoopData = array_keys($hasil_1['kriteria']); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $head): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <th><?php echo e($head); ?></th>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </thead>
            <tbody>
              <?php $__currentLoopData = $nilai_alternatif; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $alt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td>
                <?php echo e($alt['nisn']); ?>

                </td>
                <?php $__currentLoopData = $alt['nilai']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key2 => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php $__currentLoopData = $val; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key3 => $val3): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <td>
                <?php echo e($key3); ?>

                </td>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
              <?php $__currentLoopData = array_keys($hasil_1['kriteria']); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $head): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <th><?php echo e($head); ?></th>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </thead>
            <tbody>
                <?php $__currentLoopData = $nilai_alternatif; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $alt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td>
                <?php echo e($alt['nisn']); ?>

                </td>
                <?php $__currentLoopData = $alt['nilai']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key2 => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php $__currentLoopData = $val; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key3 => $val3): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <td>
                <?php echo e(round($val3, 2)); ?>

                </td>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
              <?php $__currentLoopData = array_keys($hasil_1['kriteria']); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $head): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <th><?php echo e($head); ?></th>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <th>Hasil</th>
              <th>Rangking</th>
            </thead>
            <tbody>
              <?php $__currentLoopData = $perangkingan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $alt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td><?php echo e($alt['nama']); ?> - <?php echo e($alt['nisn']); ?></td>
                <?php $__currentLoopData = $alt['nilai']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php $__currentLoopData = $val; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <td><?php echo e(round($val2, 2)); ?></td>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <td><?php echo e(round($alt['hasil'], 2)); ?></td>
                <td><?php echo e(round($alt['rangking'], 2)); ?></td>
              </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
            <?php $__currentLoopData = $sensitivitas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kode_kriteria => $data_sensitivitas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                    $nama_kriteria = collect($kriterias)->firstWhere('kode', $kode_kriteria)->nama ?? 'Nama tidak tersedia';
                ?>

                <h5 class="mt-4">
                    Kriteria: <strong><?php echo e($kode_kriteria); ?></strong>
                    <small class="text-muted">(<?php echo e($nama_kriteria); ?>)</small>
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
                  <?php $__currentLoopData = $data_sensitivitas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $siswa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <td><?php echo e($index + 1); ?></td>
                      <td><?php echo e($siswa['nama']); ?></td>
                      <td><?php echo e(number_format($siswa['hasil'], 4)); ?></td>
                      <td><?php echo e($siswa['rangking']); ?></td>
                    </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
              </table>
            </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
      </div>
      <div class="card">
        <div class="card-header">
            <h4 class="m-0"><strong>Metrik Kualitatif</strong></h4>
            <small class="text-light">Indikator seperti transparansi dan kepuasan guru terhadap sistem perangkingan</small>
        </div>

        <div class="card-body">
            <?php $__currentLoopData = $sensitivitas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kode_kriteria => $data_sensitivitas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                    $nama_kriteria = collect($kriterias)->firstWhere('kode', $kode_kriteria)->nama ?? 'Nama tidak tersedia';
                ?>

                <h5 class="mt-5">Kriteria: <strong><?php echo e($kode_kriteria); ?></strong>
                    <small class="text-muted">(<?php echo e($nama_kriteria); ?>)</small>
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
                            <?php $__currentLoopData = $data_sensitivitas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php
                                    $awal = collect($perangkingan)->firstWhere('nama', $item['nama']);
                                    $nilai_awal = $awal['hasil'] ?? 0;
                                    $rangking_awal = $awal['rangking'] ?? '-';
                                    $delta_nilai = round($item['hasil'] - $nilai_awal, 4);
                                    $delta_rank = $rangking_awal - $item['rangking'];

                                    // Penilaian kualitatif dummy (bisa diganti logika nyata jika ada)
                                    $transparansi = $delta_rank == 0 ? 'Tinggi' : ($delta_rank > 0 ? 'Cukup' : 'Rendah');
                                    $kepuasan = $item['rangking'] <= 3 ? 'Puas' : 'Perlu Evaluasi';
                                ?>
                                <tr>
                                    <td><?php echo e($item['nama']); ?></td>
                                    <td><?php echo e($nilai_awal); ?></td>
                                    <td><?php echo e($item['hasil']); ?></td>
                                    <td class="<?php echo e($delta_nilai > 0 ? 'text-success' : 'text-danger'); ?>">
                                        <?php echo e($delta_nilai > 0 ? '+' : ''); ?><?php echo e($delta_nilai); ?>

                                    </td>
                                    <td><?php echo e($rangking_awal); ?></td>
                                    <td><?php echo e($item['rangking']); ?></td>
                                    <td class="<?php echo e($delta_rank > 0 ? 'text-success' : ($delta_rank < 0 ? 'text-danger' : '')); ?>">
                                        <?php echo e($delta_rank > 0 ? '+' : ''); ?><?php echo e($delta_rank); ?>

                                    </td>
                                    <td><?php echo e($transparansi); ?></td>
                                    <td><?php echo e($kepuasan); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                        <?php $__currentLoopData = $decision_metric; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($item['nama_kriteria']); ?></td>
                                <td><?php echo e($item['bobot_awal']); ?></td>
                                <td><?php echo e($item['bobot_uji']); ?></td>
                                <td>
                                    <?php $__currentLoopData = $item['ranking_awal']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $nama): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php echo e($index + 1); ?>. <?php echo e($nama); ?><br>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </td>
                                <td>
                                    <?php $__currentLoopData = $item['ranking_baru']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $nama): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php echo e($index + 1); ?>. <?php echo e($nama); ?><br>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </td>
                                <td class="<?php echo e($item['berubah'] === 'Ya' ? 'text-danger' : 'text-success'); ?>">
                                    <?php echo e($item['berubah']); ?>

                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                <?php $__currentLoopData = $kriterias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($k->kode); ?>"><?php echo e($k->kode); ?> - <?php echo e($k->nama); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
            <canvas id="barChart"></canvas>
            <canvas id="radarChart" class="mt-4"></canvas>
        </div>
      </div>
    </div>
  </div>
  <?php else: ?>
  <div class="alert alert-danger" role="alert">
    Data Belum Lengkap !
  </div>
  <?php endif; ?>
  <?php endif; ?>
</section>
<?php echo $__env->make('includes.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
    $("#data-admin-2_length").append('<a  href="<?php echo e(Request::url()); ?>/cetak"> <button type="button" class="btn btn-outline-primary ml-3">Export ke Excel</button></a>');
});
</script>

<script>
    const barDataPerKriteria = <?php echo json_encode($bar_chart_per_kriteria, 15, 512) ?>;
    const radarDataPerKriteria = <?php echo json_encode($radar_chart_per_kriteria, 15, 512) ?>;

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

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ahp\resources\views/perhitungan/hasil.blade.php ENDPATH**/ ?>