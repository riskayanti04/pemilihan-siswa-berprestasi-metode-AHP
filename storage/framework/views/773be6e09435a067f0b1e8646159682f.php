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
              <div class="row">
                <div class="col-md-6 col-sm-12">
                  <table class="table table-bordered">
                    <tbody>
                      <tr>
                        <td>NISN</td>
                        <td><?php echo e($data->nisn); ?></td>
                      </tr>
                      <tr>
                        <td>Nama</td>
                        <td><?php echo e($data->nama); ?></td>
                      </tr>
                      <tr>
                        <td>Jurusan</td>
                        <td><?php echo e($data->jurusan); ?></td>
                      </tr>
                      <tr>
                        <td>Kelas</td>
                        <td><?php echo e($data->kelas); ?></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="col-md-6 col-sm-12">
                  <table id="data-admin" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>NO</th>
                      <th>NAMA KRITERIA</th>
                      <th>NILAI</th>
                    </tr>
                    </thead>
                    <tbody>
                      <?php $__currentLoopData = $data->nilai_alternatif; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nil): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($nil->sub_kriteria->kriteria->nama); ?></td>
                        <td><?php echo e($nil->sub_kriteria->nama); ?></td>
                        </form>
                      </tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!-- /.card-body -->
          </div>
    </section>
<?php echo $__env->make('includes.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<script type="text/javascript">
$(document).ready(function(){
    // Append all paragraphs
    $("#data-admin_length").append('<a  href="/alternatif/<?php echo e($data->nisn); ?>/edit"> <button type="button" class="btn btn-outline-primary ml-3">UBAH</button></a>');
});
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ahp\resources\views/alternatif/nilai_alternatif.blade.php ENDPATH**/ ?>