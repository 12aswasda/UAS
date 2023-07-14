

<?php $__env->startSection('content'); ?>

<h2>EDIT ABSEN PNS</h2>

<form action="<?php echo e(url('users/' . $row->user_id)); ?>" method="post">
    
    <input type="hidden" name="_method" value="PATCH">
    <?php echo csrf_field(); ?>


    <div class="mb-3">
        <label for="">NIP</label>
        <input type="text" name="user_id" id="" class="form-control" value="<?php echo e($row->user_id); ?>">
    </div>

    <div class="mb-3">
        <label for="">E-MAIL</label>
        <input type="text" name="user_email" id="" class="form-control" value="<?php echo e($row->user_email); ?>">
    </div>

    <div class="mb-3">
        <label for="">NO. ABSEN</label>
        <input type="text" name="user_noabsen" id="" class="form-control" value="<?php echo e($row->user_password); ?>">
    </div>

    <div class="mb-3">
        <label for="">NAMA</label>
        <input type="text" name="user_nama" id="" class="form-control"value="<?php echo e($row->user_nama); ?>">
    </div>

    <div class="mb-3">
        <input type="submit" value="UPDATE" class="btn btn-primary">
        
    </div>


</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pbwl-UAS-Alwi\pbwl-UAS-Alwi\resources\views/users/edit.blade.php ENDPATH**/ ?>