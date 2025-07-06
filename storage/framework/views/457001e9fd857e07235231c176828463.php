<?php $__env->startSection('content'); ?>
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">KRITERIA</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="/">Home</a></li>
          <li class="breadcrumb-item active">Kriteria</li>
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
          <th>KODE</th>
          <th>NAMA</th>
          <th>SUB KRITERIA</th>
          <th>AKSI</th>
        </tr>
        </thead>
        <tbody>
          <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $krit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
          <td><?php echo e($loop->iteration); ?></td>
          <td><?php echo e($krit->kode); ?></td>
          <td><?php echo e($krit->nama); ?></td>
          <td>
            <a href="/sub_kriteria/<?php echo e($krit->kode); ?>">
              <span class="badge badge-secondary" data-toggle="tooltip" data-placement="top" title="Ubah">Lihat Sub Kriteria</span>
            </a>
          </td>
          <td>
            <a href="/kriteria/<?php echo e($krit->kode); ?>/edit">
              <span class="btn badge badge-secondary" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></span>
            </a>                    
            <span class="btn badge badge-danger" onclick="event.preventDefault(); document.getElementById('delete-kriteria').submit();" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-trash"></i></span>
          </td>
          
          <form id="delete-kriteria" action="/kriteria/<?php echo e($krit->kode); ?>" method="post" style="display: none;">
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
    $("#data-admin_length").append('<a  href="<?php echo e(route('kriteria.create')); ?>"> <button type="button" class="btn btn-outline-primary ml-3">Tambah</button></a>');
});
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ahp\resources\views/kriteria/kriteria.blade.php ENDPATH**/ ?>