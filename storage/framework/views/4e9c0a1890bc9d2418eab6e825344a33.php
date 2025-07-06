<?php $__env->startSection('content'); ?>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">PILIH JURUSAN</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active">Pilih Jurusan</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<section class="content">
    <div class="card">
        <div class="card-header">
            <h3 class="m-0 text-dark"><strong>Pilih Jurusan</strong></h3>
        </div>
        <div class="card-body">
            <div class="btn-group" role="group" aria-label="Basic example">
                <a href="/hasil/IPA" class="btn">
                    <button type="button" class="btn btn-secondary btn-lg">IPA</button>
                </a>
            </div>
            <div class="btn-group" role="group" aria-label="Basic example">
                <a href="/hasil/IPS" class="btn">
                    <button type="button" class="btn btn-secondary btn-lg">IPS</button>
                </a>
            </div>
            <div class="btn-group" role="group" aria-label="Basic example">
                <a href="/hasil/BAHASA" class="btn">
                    <button type="button" class="btn btn-secondary btn-lg">BAHASA</button>
                </a>
            </div>
        </div>
    </div>
</section>
<?php echo $__env->make('includes.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ahp\resources\views/perhitungan/jurusan.blade.php ENDPATH**/ ?>