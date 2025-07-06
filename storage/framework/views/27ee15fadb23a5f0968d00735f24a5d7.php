<?php $__env->startSection('content'); ?>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">PILIH PERIODE</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active">Pilih Periode</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="card">
        <div class="card-header">
            <h3 class="m-0 text-dark"><strong>Pilih Periode</strong></h3>
        </div>
        <div class="card-body">
            <div class="btn-group mb-2" role="group" aria-label="Periode">
                
                <?php $__currentLoopData = $periodes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $periode): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="/hasil/<?php echo e($jurusan); ?>/<?php echo e($kelas); ?>/<?php echo e($periode); ?>" class="btn btn-secondary btn-lg" style="margin: 5px; ">
                        <?php echo e(\Carbon\Carbon::createFromFormat('Y-m', $periode)->translatedFormat('F Y')); ?>

                    </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</section>

<?php echo $__env->make('includes.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ahp\resources\views/perhitungan/periode.blade.php ENDPATH**/ ?>