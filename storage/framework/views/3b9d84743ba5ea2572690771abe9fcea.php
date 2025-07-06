<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo e(asset('/plugins/font-awesome/css/font-awesome.min.css')); ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo e(asset('css/custom.css')); ?>">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo e(asset('/plugins/datatables/dataTables.bootstrap4.css')); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo e(asset('/dist/css/adminlte.min.css')); ?>">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
<body>
    <div class="card">
        <div class="card-body">
            <table id="data-admin-2" class="table table-bordered">
            <thead>
                <tr>
                    <td>NAMA</td>
                    <?php $__currentLoopData = array_keys($hasil_1['kriteria']); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $head): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <td><?php echo e($head); ?></td>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <td>Hasil</td>
                    <td>Rangking</td>
                </tr>
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
                <td><?php echo e($alt['rangking']); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
            </table>
        </div>
    </div>
</body>
</html>
<?php /**PATH C:\laragon\www\ahp\resources\views/perhitungan/cetak_hasil.blade.php ENDPATH**/ ?>