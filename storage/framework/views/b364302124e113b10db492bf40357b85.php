<?php $__env->startSection('content'); ?>
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="/">Home</a></li>
          
          
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
  <div class="card">
    <!-- /.card-header -->
    <div class="card-body">
        <div class="container">
            <h2>Grafik Skor Siswa per Kriteria</h2>

            <div class="mb-3">
                <label>Kriteria</label>
                <select id="kriteria" class="form-control">
                    <?php $__currentLoopData = $kriteria; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($k->kode); ?>"><?php echo e($k->nama); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>

            <div class="mb-3">
                <label>Periode (YYYY-MM)</label>
                <input type="month" id="periode" class="form-control" value="<?php echo e(date('Y-m')); ?>">
            </div>

            <button class="btn btn-primary mb-4" onclick="loadChart()">Tampilkan Grafik</button>

            <canvas id="barChart" class="mb-5" height="100"></canvas>
            <canvas id="radarChart" height="100"></canvas>
        </div>
    </div>
    <!-- /.card-body -->
  </div>
</section>
<?php echo $__env->make('includes.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<script type="text/javascript">
$(document).ready(function(){
    function loadChart() {
        const kriteria = document.getElementById('kriteria').value;
        const periode = document.getElementById('periode').value;

        fetch(`/grafik/data?kode_kriteria=${kriteria}&periode=${periode}`)
            .then(res => res.json())
            .then(data => {
                const labels = data.map(d => d.nama);
                const values = data.map(d => d.skor);

                if (barChart) barChart.destroy();
                if (radarChart) radarChart.destroy();

                const barCtx = document.getElementById('barChart').getContext('2d');
                const radarCtx = document.getElementById('radarChart').getContext('2d');

                barChart = new Chart(barCtx, {
                    type: 'bar',
                    data: {
                        labels: labels,
                        datasets: [{
                            label: 'Skor Siswa',
                            data: values,
                            backgroundColor: 'rgba(75, 192, 192, 0.5)',
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

                radarChart = new Chart(radarCtx, {
                    type: 'radar',
                    data: {
                        labels: labels,
                        datasets: [{
                            label: 'Perbandingan Skor',
                            data: values,
                            backgroundColor: 'rgba(153, 102, 255, 0.3)',
                            borderColor: 'rgba(153, 102, 255, 1)',
                            borderWidth: 2
                        }]
                    },
                    options: {
                        responsive: true
                    }
                });
            });
    }
});
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ahp\resources\views/grafik.blade.php ENDPATH**/ ?>