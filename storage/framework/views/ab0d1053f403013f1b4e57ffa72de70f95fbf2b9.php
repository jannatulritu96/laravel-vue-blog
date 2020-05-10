<?php if(session()->has('success')): ?>
<div class="alert alert-primary" role="alert">
    <?php echo e(session('success')); ?>

</div>
<?php endif; ?>
<?php if(session()->has('error')): ?>
<div class="alert alert-danger" role="alert">
    <?php echo e(session('error')); ?>

</div>
<?php endif; ?><?php /**PATH X:\xampp\htdocs\veuBlog\resources\views/admin/layouts/_messages.blade.php ENDPATH**/ ?>