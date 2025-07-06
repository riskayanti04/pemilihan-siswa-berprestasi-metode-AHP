<?php $__env->startSection('content'); ?>
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">TAMBAH ALTERNATIF</h1>
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
    <section class="content">
      <div class="card">
      <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
      <?php endif; ?>
      <!-- /.card-header -->
      <div class="card-body">
        <form role="form" method="post" action="<?php echo e(route('alternatif.store')); ?>">
        <?php echo csrf_field(); ?>
        <div class="row">
          <div class="col-md-6">
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">NISN</label>
                <input type="text" class="form-control" name="nisn" id="exampleInputEmail1" placeholder="kode nisn siswa">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Nama Siswa</label>
                <input type="text" class="form-control" name="nama" id="exampleInputPassword1" placeholder="nama">
              </div>
              <div class="form-group">
                <label for="jurusan">Jurusan</label>
                <select class="form-control" name="jurusan" id="jurusan">
                  <option value="IPA">IPA</option>
                  <option value="IPS">IPS</option>
                  <option value="BAHASA">BAHASA</option>
                </select>
              </div>
              <div class="form-group">
                <label for="kelas">Kelas</label>
                <select class="form-control" name="kelas" id="kelas">
                  <option value="X">X</option>
                  <option value="XI">XI</option>
                  <option value="XII">XII</option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card-body">
              <?php $__currentLoopData = $kriteria; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $krit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="form-group">
                <label for="exampleInputEmail1"><?php echo e($krit->nama); ?></label>
                <select class="form-control" name="nilai[<?php echo e($krit->kode); ?>]">
                  <?php $__currentLoopData = $krit->sub_kriteria; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <option value="<?php echo e($sub->kode); ?>"><?php echo e($sub->nama); ?></option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
              </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
          </div>
        </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-primary float-right">Tambah</button>
          </div>
        </form>
      </div>
      </div>
    </section>
<?php echo $__env->make('includes.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ahp\resources\views/alternatif/tambah_alternatif.blade.php ENDPATH**/ ?>