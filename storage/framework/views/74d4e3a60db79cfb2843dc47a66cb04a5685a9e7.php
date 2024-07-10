

<?php $__env->startSection('title', 'Import Users'); ?>
<?php $__env->startSection('main'); ?>

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Import Users</h1>
        </div>

        
        <?php echo $__env->make('admin.includes.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Import Users</h6>
            </div>
            <form class="form" method="POST" enctype="multipart/form-data" action="<?php echo e(url('admin/import-user')); ?>">
                <?php echo csrf_field(); ?>
                <div class="card-body">
                    <div class="form-group row">

                        <div class="col-md-12 my-2">
                            <p>Please Upload CSV in Given Format <a href="<?php echo e(asset('files/sample-data-sheet.csv')); ?>"
                                    target="_blank">Sample CSV Format</a></p>
                        </div>
                        
                        <div class="col-sm-12 mt-1 mb-2 mb-sm-0">
                            <span style="color:red;">*</span>File Input(Datasheet)</label>
                            <input type="file" class="form-control form-control-user <?php $__errorArgs = ['file'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                id="exampleFile" name="file" value="<?php echo e(old('file')); ?>">
                            <?php $__errorArgs = ['file'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="text-danger"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success btn-user mt-3">Upload Users</button>
                </div>

                <div class="card-footer">
                    <a href="<?php echo e(route('export-user')); ?>" class="btn btn-primary float-right my-2">Export Excel</a>
                </div>
            </form>
        </div>

    </div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    <!-- Page level plugins -->
    <script src="<?php echo e(asset('assets/admin/vendor/datatables/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/admin/vendor/datatables/dataTables.bootstrap4.min.js')); ?>"></script>
    <!-- Page level custom scripts -->

    <script src="<?php echo e(asset('assets/admin/js/demo/datatables-demo.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin/layouts.two_col', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Spring 2023\SD\xampp\htdocs\sadia\resources\views/admin/pages/import_users.blade.php ENDPATH**/ ?>