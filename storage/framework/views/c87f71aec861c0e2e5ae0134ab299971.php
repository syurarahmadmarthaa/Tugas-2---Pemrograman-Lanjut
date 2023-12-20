
  
<?php $__env->startSection('title', 'Home Mahasiswa'); ?>
  
<?php $__env->startSection('contents'); ?>
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Mahasiswa</h1>
        <a href="<?php echo e(route('mahasiswas.create')); ?>" class="btn btn-primary">Tambah</a>
    </div>
    <hr />
    <?php if(Session::has('success')): ?>
        <div class="alert alert-success" role="alert">
            <?php echo e(Session::get('success')); ?>

        </div>
    <?php endif; ?>
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>No.</th>
                <th>NIM</th>
                <th>NAMA</th>
                <th>Jurusan</th>
                <th>E-mail</th>
                <th>Matakuliah</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php if($mhs->count() > 0): ?>
                <?php $__currentLoopData = $mhs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="align-middle"><?php echo e($loop->iteration); ?></td>
                        <td class="align-middle"><?php echo e($m->nim); ?></td>
                        <td class="align-middle"><?php echo e($m->name); ?></td>
                        <td class="align-middle"><?php echo e($m->jurusan); ?></td>
                        <td class="align-middle"><?php echo e($m->email); ?></td>  
                        <td class="align-middle"><?php echo e($m->mk); ?></td>  
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="<?php echo e(route('mahasiswas.show', $m->id)); ?>" type="button" class="btn btn-secondary">Detail</a>
                                <a href="<?php echo e(route('mahasiswas.edit', $m->id)); ?>" type="button" class="btn btn-warning">Edit</a>
                                <form action="<?php echo e(route('mahasiswas.destroy', $m->id)); ?>" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button class="btn btn-danger m-0">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
                <tr>
                    <td class="text-center" colspan="7">Data Mahasiswa Tidak Ditemukan</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\SI-mahasiswa\resources\views/mahasiswas/index.blade.php ENDPATH**/ ?>