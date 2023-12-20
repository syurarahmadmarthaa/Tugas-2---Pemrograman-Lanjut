
  
<?php $__env->startSection('title', 'Edit Mahasiswa'); ?>
  
<?php $__env->startSection('contents'); ?>
    <h1 class="mb-0">Edit Data Mahasiswa</h1>
    <hr />
    <form action="<?php echo e(route('mahasiswas.update', $mhs->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">NIM</label>
                <input type="text" name="nim" class="form-control" placeholder="NIM" value="<?php echo e($mhs->nim); ?>" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="name" class="form-control" placeholder="Nama" value="<?php echo e($mhs->name); ?>" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Jurusan</label>
                <input type="text" name="jurusan" class="form-control" placeholder="Jurusan" value="<?php echo e($mhs->jurusan); ?>" >
            </div>
            <div class="col mb-3">
                <label class="form-label">E-mail</label>
                <input type="text" name="email" class="form-control" placeholder="E-mail" value="<?php echo e($mhs->email); ?>" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Mata Kuliah</label>
                <textarea class="form-control" name="mk" placeholder="Mata Kuliah" ><?php echo e($mhs->mk); ?></textarea>
            </div>    
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\SI-mahasiswa\resources\views/mahasiswas/edit.blade.php ENDPATH**/ ?>