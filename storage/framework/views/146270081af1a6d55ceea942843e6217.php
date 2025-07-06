<?php $__env->startSection('content'); ?>
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">ADMIN / GURU</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">Admin Guru</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
    <div class="card">
      <?php if(session('success')): ?>
      <span class="alert alert-success" role="alert">
          <strong><?php echo e(session('success')); ?></strong>
      </span>
      <?php endif; ?>
      <?php if(session('error')): ?>
      <span class="alert alert-danger" role="alert">
          <strong><?php echo e(session('error')); ?></strong>
      </span>
      <?php endif; ?>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="data-admin" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>NO</th>
                  <th>USERNAME</th>
                  <th>NAMA</th>
                  <th>E-MAIL</th>
                  <th>NO. TELP</th>
                  <th>AKSI</th>
                </tr>
                </thead>
                <tbody>
                  <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $admin): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><?php echo e($loop->iteration); ?></td>
                  <td><?php echo e($admin->username); ?></td>
                  <td><?php echo e($admin->name); ?></td>
                  <td><?php echo e($admin->email); ?></td>
                  <td><?php echo e($admin->no_telp); ?></td>
                  <td>
                    <span onclick="event.preventDefault(); document.getElementById('delete-admin<?php echo e($admin->id); ?>').submit();"  class="badge badge-danger" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-trash"></i></span>
                  </td>
                  <form id="delete-admin<?php echo e($admin->id); ?>" action="/admin/<?php echo e($admin->id); ?>" method="post" style="display: none;">
                    <?php echo method_field('DELETE'); ?>
                    <?php echo csrf_field(); ?>
                  </form>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
              </table>
            </div>
          </div>
    </section>
<?php echo $__env->make('includes.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<script type="text/javascript">
$(document).ready(function(){
    // Append all paragraphs
    $("#data-admin_length").append('<a href="/admin/create"><button type="button" class="btn btn-outline-primary ml-3">Tambah</button></a>');
});
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app_noscript', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ahp\resources\views/admin/admin.blade.php ENDPATH**/ ?>