

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2><center>Web CRUD Data Mahasiswa</center<h2>
        </div>
            <a class="btn btn-info" href="<?php echo e(route('mahasiswa.create')); ?>">Create Data</a>
        <br><br>
    </div>
</div>

<?php if($message = Session::get('success')): ?>
<div class="alert alert-success">
    <p><?php echo e($message); ?></p>
</div>
<?php endif; ?>

<table class="table table-secondary">
    <tr>
    <th>No</th>
    <th>Foto</th>
    <th>NIM</th>
    <th>Nama Mahasiswa</th>
    <th>Jenis Kelamin</th>
    <th>Alamat</th>
    <th>Kota</th>
    <th>Email</th>
    <th width="280px">Opsi</th>
    </tr>
    <?php $__currentLoopData = $mahasiswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mhs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e(++$i); ?></td>
            <td><img src="/image/<?php echo e($mhs->foto); ?>" width="100px"></td>
            <td><?php echo e($mhs->nim); ?></td>
            <td><?php echo e($mhs->namamhs); ?></td>
            <td><?php echo e($mhs->jk); ?></td>
            <td><?php echo e($mhs->alamat); ?></td>
            <td><?php echo e($mhs->kota); ?></td>
            <td><?php echo e($mhs->email); ?></td>
            <td>
                <form action="<?php echo e(route('mahasiswa.destroy',$mhs->id)); ?>" method="POST">
                <a class="btn btn-secondary" href="<?php echo e(route('mahasiswa.show',$mhs->id)); ?>">Tampilkan</a>
                <a class="btn btn-info" href="<?php echo e(route('mahasiswa.edit',$mhs->id)); ?>">Edit</a>
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>

<?php echo $mahasiswa->links(); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('mahasiswa.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS X453M\belajarlara\resources\views/mahasiswa/index.blade.php ENDPATH**/ ?>