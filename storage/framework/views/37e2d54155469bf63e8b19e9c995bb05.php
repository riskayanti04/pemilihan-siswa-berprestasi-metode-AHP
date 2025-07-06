<?php $__env->startSection('content'); ?>
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">BOBOT SUB KRITERIA</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="/">Home</a></li>
          <li class="breadcrumb-item active">Bobot Sub Kriteria</li>
        </ol>
      </div>
    </div>
  </div>
</div>
<section class="content">
  <div class="card">
    <div class="card-header">
      <h3 class="m-0 text-dark"><strong>Pilih Kriteria</strong></h3>
    </div>
    <div class="card-body">
    <div class="btn-group" role="group" aria-label="Basic example">
    <?php $__currentLoopData = $kriteria; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kri): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <a href="/bobot_sub_kriteria/<?php echo e($kri->kode); ?>" class="btn">
        <button type="button" class="btn <?php echo e($kri->kode == $kriteria_terpilih->kode ? 'btn-primary' : 'btn-secondary'); ?> btn-lg"><?php echo e($kri->nama); ?></button>
      </a>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    </div>
  </div>
  <div class="card">
      <!-- /.card-header -->
      <div class="card-header">
        <h3 class="m-0 text-dark"><strong>SKALA KEPENTINGAN</strong></h3>
      </div>
      <div class="card-body">
        <table id="example1" class="table table-bordered">
          <thead>
          <tr>
            <?php $__currentLoopData = $skala_kepentingan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $skl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <th><?php echo e($key); ?></th>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tr>
          </thead>
          <tbody>
            <tr>
              <?php $__currentLoopData = $skala_kepentingan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <td><?php echo e($skl); ?></td>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tr>
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
  <div class="card">
    <div class="card-header">
      <h3 class="m-0 text-dark"><strong>LANGKAH 1</strong>  MATRIK PERBANDINGAN BERPASANGAN</h3>
    </div>
    <div class="card-body">
      <table id="example1" class="table table-bordered">
        <thead>
        <tr>
          <th>Kriteria</th>
          <?php $__currentLoopData = $m_1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $krit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <th><?php echo e($key); ?></th>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = array_keys($m_1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $var1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <td><?php echo e($var1); ?></td>
              <?php $__currentLoopData = array_keys($m_1[$var1]); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $var2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($m_1[$var1][$var2]): ?>
                  <td data-href='/bobot_sub_kriteria/<?php echo e($kriteria_terpilih->kode); ?>,<?php echo e($var1); ?>,<?php echo e($var2); ?>/edit' class="clickable-row pointer bg-success">
                    <?php echo e($m_1[$var1][$var2]); ?>

                  </td>
                  <?php else: ?>
                  <td data-href='/bobot_sub_kriteria/<?php echo e($kriteria_terpilih->kode); ?>,<?php echo e($var1); ?>,<?php echo e($var2); ?>/edit' class="clickable-row pointer bg-danger">
                    null
                  </td>
                <?php endif; ?>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <td class="bg-secondary">Jumlah</td>
              <?php $__currentLoopData = $jum_m_1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $var): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <td class="bg-secondary">
                    <?php echo e($var); ?>

                  </td>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <?php if($m_1_null == false): ?>
  <div class="card">
    <div class="card-header">
      <h3 class="m-0 text-dark"><strong>LANGKAH 2</strong>  MATRIK NILAI KRITERIA PROBLEM SOLVING</h3>
    </div>
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <th>Kriteria</th>
          <?php $__currentLoopData = $m_1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $krit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <th><?php echo e($key); ?></th>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <th>Jumlah</th>
          <th>Bobot</th>
        </thead>
        <tbody>
        <?php $__currentLoopData = array_keys($m_2); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $var1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <td><?php echo e($var1); ?></td>
            <?php $__currentLoopData = array_keys($m_2[$var1]); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $var2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <td><?php echo e(round($m_2[$var1][$var2], 2)); ?></td>
            <?php if($loop->last): ?>
            <td><?php echo e(round($jum_m_2[$var1], 2)); ?></td>
            <td><?php echo e(round($bobot_m_2[$var1], 2)); ?></td>
            <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
      </table>
    </div>
  </div>
  <div class="card">
    <div class="card-header">
      <h3 class="m-0 text-dark"><strong>LANGKAH 3</strong>  MATRIK PENJUMLAHAN</h3>
    </div>
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <th>Kriteria</th>
          <?php $__currentLoopData = $m_3; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $krit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <th><?php echo e($key); ?></th>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <th>Jumlah</th>
        </thead>
        <tbody>
        <?php $__currentLoopData = array_keys($m_3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $var1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <td><?php echo e($var1); ?></td>
            <?php $__currentLoopData = array_keys($m_3[$var1]); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $var2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <td><?php echo e(round($m_3[$var1][$var2], 2)); ?></td>
            <?php if($loop->last): ?>
            <td><?php echo e(round($jum_m_3[$var1], 2)); ?></td>
            <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
      </table>
    </div>
  </div>
  <div class="card">
    <div class="card-header">
      <h3 class="m-0 text-dark"><strong>LANGKAH 4</strong>  PERHITUNGAN PROBLEM SOLVING</h3>
    </div>
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <th>Kriteria</th>
          <th>Bobot</th>
          <th>Jumlah</th>
          <th>Hasil</th>
        </thead>
        <tbody>
        <?php $__currentLoopData = array_keys($m_4); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $var1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <td><?php echo e($var1); ?></td>
            <td><?php echo e(round($m_4[$var1]['bobot'], 2)); ?></td>
            <td><?php echo e(round($m_4[$var1]['jumlah'], 2)); ?></td>
            <td><?php echo e(round($hasil_m_4[$var1], 2)); ?></td>
          </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td colspan="3" class="text-center">Jumlah</td>
            <td><?php echo e(round($total_m_4, 2)); ?></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <div class="card">
    <div class="card-header">
      <h3 class="m-0 text-dark"><strong>LANGKAH 5</strong>  KESIMPULAN</h3>
    </div>
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <th class="text-center" colspan="2">Keterangan</th>
        </thead>
        <tbody>
          <tr>
            <td>Lamda  λ Maks </td>
            <td><?php echo e(round($hasil['lamda'], 2)); ?></td>
          </tr>
          <tr>
            <td>n</td>
            <td><?php echo e(round($hasil['n'], 2)); ?></td>
          </tr>
          <tr>
            <td>MAKS</td>
            <td><?php echo e(round($hasil['maks'], 2)); ?></td>
          </tr>
          <tr>
            <td>CI</td>
            <td><?php echo e(round($hasil['ci'], 2)); ?></td>
          </tr>
          <tr>
            <td>CR</td>
            <td><?php echo e(round($hasil['cr'], 4)); ?></td>
            <td><?php echo e($hasil['konsisten']); ?></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <?php else: ?>
  <div class="alert alert-danger" role="alert">
    Silahkan Lengkapi Matrik Perbandingan Berpasangan Untuk Menampilkan Perhitungan Selanjutnya
  </div>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ahp\resources\views/bobot_sub_kriteria/nilai_bobot_sub_kriteria.blade.php ENDPATH**/ ?>