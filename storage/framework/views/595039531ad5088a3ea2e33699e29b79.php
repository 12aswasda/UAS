

<?php $__env->startSection('content'); ?>

<h2>Data Pengguna</h2>

<a href="<?php echo e(url('users/create')); ?>">Tambah User</a>

<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>E-MAIL</th>
        <th>PASSWORD</th>
        <th>NAMA</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    <?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($row->user_id); ?> </td>
        <td><?php echo e($row->user_email); ?> </td>
        <td><?php echo e($row->user_password); ?> </td>
        <td><?php echo e($row->user_nama); ?> </td>
        
        <td><a href="<?php echo e(url('users/edit/' . $row->user_id)); ?>"class="btn btn-warning" >EDIT</a> </td>
        <td>
            <form action="<?php echo e(url('users/'. $row->user_id)); ?>" method="post">
                <input type="hidden" name="_method" value="DELETE">
                <?php echo csrf_field(); ?>
                <input type="submit" value="Delete" class="btn btn-danger" >
                
            </form>
        </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
</table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pbwl-laravel-hairulamri\resources\views/users/index.blade.php ENDPATH**/ ?>