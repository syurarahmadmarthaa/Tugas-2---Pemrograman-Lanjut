
  
<?php $__env->startSection('title', 'Detail Mahasiswa'); ?>
  
<?php $__env->startSection('contents'); ?>
    <h1 class="mb-0">Detail Mahasiswa</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">NIM</label>
            <input type="text" name="nim" class="form-control" placeholder="NIM" value="<?php echo e($mhs->nim); ?>" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="name" class="form-control" placeholder="Nama" value="<?php echo e($mhs->name); ?>" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Jurusan</label>
            <input type="text" name="jurusan" class="form-control" placeholder="Jurusan" value="<?php echo e($mhs->jurusan); ?>" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">E-mail</label>
            <input type="text" name="email" class="form-control" placeholder="Email" value="<?php echo e($mhs->email); ?>" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Mata Kuliah</label>
            <textarea class="form-control" name="mk" placeholder="Mata Kuliah" readonly><?php echo e($mhs->mk); ?></textarea>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Dibuat Pada</label>
            <input type="text" name="created_at" class="form-control" placeholder="Dibuat Pada" value="<?php echo e($mhs->created_at); ?>" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Diupdate Pada</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Diupdate Pada" value="<?php echo e($mhs->updated_at); ?>" readonly>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\SI-mahasiswa\resources\views/mahasiswas/show.blade.php ENDPATH**/ ?>