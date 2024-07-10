
<?php if(Session::has('success')): ?>
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert">
            <i class="fa fa-times"></i>
        </button>
        <strong>Success !</strong> <?php echo e(session('success')); ?>

    </div>
<?php endif; ?>

<?php if(Session::has('error')): ?>
    <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert">
            <i class="fa fa-times"></i>
        </button>
        <strong>Error !</strong> <?php echo e(session('error')); ?>

    </div>
<?php endif; ?><?php /**PATH D:\Spring 2023\SD\xampp\htdocs\sadia\resources\views/admin/includes/alert.blade.php ENDPATH**/ ?>