<?php $__env->startSection('content'); ?>
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
            <?php $chartIndex = 1; $counter = 0; ?>

        <div class="container-fluid">
            <?php $__currentLoopData = $decision_metric; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kelas => $kelasData): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php $__currentLoopData = $kelasData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kode => $kriteriaList): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php $__currentLoopData = $kriteriaList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kriteria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                            $nama_kriteria = collect($kriterias)->firstWhere('kode', $kriteria['kode_kriteria'])->nama ?? 'Nama tidak tersedia';
                            $canvasAwalId = 'chart_awal_' . $chartIndex;
                            $canvasUjiId = 'chart_uji_' . $chartIndex;
                        ?>

                        
                        <?php if($counter % 2 == 0): ?>
                            <div class="row">
                        <?php endif; ?>

                        <div class="col-md-6">
                            <div class="card mb-4 p-3 shadow">
                                <h5><?php echo e($kriteria['nama_kriteria']); ?> (<?php echo e($nama_kriteria); ?>)</h5>
                                <p>
                                    Kelas: <strong><?php echo e($kelas); ?></strong><br>
                                    Bobot Awal: <strong><?php echo e($kriteria['bobot_awal']); ?></strong><br>
                                    Bobot Uji: <strong><?php echo e($kriteria['bobot_uji']); ?></strong><br>
                                    Ranking Berubah: <strong><?php echo e($kriteria['berubah'] ?? 'Tidak'); ?></strong>
                                </p>

                                <div class="row">
                                    <div class="col-md-6">
                                        <canvas id="<?php echo e($canvasAwalId); ?>" height="200"></canvas>
                                    </div>
                                    <div class="col-md-6">
                                        <canvas id="<?php echo e($canvasUjiId); ?>" height="200"></canvas>
                                    </div>
                                </div>

                                
                                <script>
                                    document.addEventListener('DOMContentLoaded', function () {
                                        const ctxAwal = document.getElementById('<?php echo e($canvasAwalId); ?>').getContext('2d');
                                        const ctxUji = document.getElementById('<?php echo e($canvasUjiId); ?>').getContext('2d');

                                        new Chart(ctxAwal, {
                                            type: 'pie',
                                            data: {
                                                labels: ['Bobot Awal', 'Sisa'],
                                                datasets: [{
                                                    data: [<?php echo e($kriteria['bobot_awal']); ?>, <?php echo e(1 - $kriteria['bobot_awal']); ?>],
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
                                                    data: [<?php echo e($kriteria['bobot_uji']); ?>, <?php echo e(1 - $kriteria['bobot_uji']); ?>],
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

                        
                        <?php $counter++; ?>
                        <?php if($counter % 2 == 0): ?>
                            </div>
                        <?php endif; ?>

                        <?php $chartIndex++; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            
            <?php if($counter % 2 != 0): ?>
                </div>
            <?php endif; ?>
        </div>
        </div>
    </div>
</section>
<?php echo $__env->make('includes.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ahp\resources\views/home.blade.php ENDPATH**/ ?>