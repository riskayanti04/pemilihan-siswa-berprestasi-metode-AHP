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
                    <button type="button" class="btn btn-secondary btn-lg"><?php echo e($kri->nama); ?></button>
                </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</section>
<?php echo $__env->make('includes.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ahp\resources\views/bobot_sub_kriteria/menu.blade.php ENDPATH**/ ?>