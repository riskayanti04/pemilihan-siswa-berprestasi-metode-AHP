<?php $__env->startSection('content'); ?>
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">ALTERNATIF</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">Alternatif</li>
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
              <table id="data-admin" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>NO</th>
                  <th>NAMA SISWA</th>
                  <th>NISN</th>
                  <th>NILAI ALTERNATIF</th>
                  <th>AKSI</th>
                </tr>
                </thead>
                <tbody>
                  <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sis): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><?php echo e($loop->iteration); ?></td>
                  <td><?php echo e($sis->nama); ?></td>
                  <td><?php echo e($sis->nisn); ?></td>
                  <td>
                    <a href="/alternatif/<?php echo e($sis->nisn); ?>">
                      <span class="badge badge-secondary" data-toggle="tooltip" data-placement="top" title="Ubah">Lihat Nilai Alternatif</span>
                    </a>
                  </td>
                  <td>
                    <a href="/alternatif/<?php echo e($sis->nisn); ?>/edit">
                      <span class="btn badge badge-secondary" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></span>
                    </a>                    
                    <span class="btn badge badge-danger" onclick="event.preventDefault(); document.getElementById('delete-kriteria<?php echo e($sis->nisn); ?>').submit();" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-trash"></i></span>
                  </td>
                  
                  <form id="delete-kriteria<?php echo e($sis->nisn); ?>" action="/alternatif/<?php echo e($sis->nisn); ?>" method="post" style="display: none;">
                    <?php echo method_field('DELETE'); ?>
                    <?php echo csrf_field(); ?>
                  </form>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
    </section>
<?php echo $__env->make('includes.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<script type="text/javascript">
$(document).ready(function(){
    // Append all paragraphs
    $("#data-admin_length").append('<a  href="<?php echo e(route('alternatif.create')); ?>"> <button type="button" class="btn btn-outline-primary ml-3">Tambah</button></a>');
});
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ahp\resources\views/alternatif/alternatif.blade.php ENDPATH**/ ?>