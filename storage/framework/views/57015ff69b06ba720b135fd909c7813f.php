
  
<?php $__env->startSection('title', 'Tambah Mahasiswa'); ?>
  
<?php $__env->startSection('contents'); ?>
    <h1 class="mb-0">Tambah Mahasiswa</h1>
    <hr />
    <form action="<?php echo e(route('mahasiswas.store')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="nim" class="form-control" placeholder="NIM">
            </div>
            <div class="col">
                <input type="text" name="name" class="form-control" placeholder="Nama">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="jurusan" class="form-control" placeholder="Jurusan">
            </div>
            <div class="col">
                <input type="text" name="email" class="form-control" placeholder="E-mail">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <textarea class="form-control" name="mk" placeholder="Mata Kuliah"></textarea>
            </div>
        </div>
 
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\SI-mahasiswa\resources\views/mahasiswas/create.blade.php ENDPATH**/ ?>