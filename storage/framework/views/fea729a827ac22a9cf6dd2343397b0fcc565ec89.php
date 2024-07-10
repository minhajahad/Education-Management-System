<?php $__env->startSection('title','Show a Session'); ?>
<?php $__env->startSection('content'); ?>
<div class="col-12">
    <div class="bg-light rounded h-100 p-4">
        <div class="card-header">
            Show <a class="btn btn-info mx-2" href="<?php echo e(url('admin/assigned_courses/index')); ?>">List</a>
        </div>
        <div class="card-body mt-3">
            <table class="table table-striped">
                <tr>
                    <th scope="row">Session</th>
                    <td>
                        <?php echo e($sessions->add_session->session); ?>

                    </td>
                </tr>
                <tr>
                    <th scope="row">Teacher's Name</th>
                    <td><?php echo e($sessions->teacher->first_name); ?> <?php echo e($sessions->teacher->last_name); ?></td>
                </tr>
                <tr>
                    <th scope="row">Section</th>
                    <td><?php echo e($sessions->section); ?></td>
                </tr>
                <tr>
                    <th scope="row">Course Code</th>
                    <td><?php echo e($sessions->course->course_code); ?></td>
                </tr>
                <tr>
                    <th scope="row">Course Title</th>
                    <td><?php echo e($sessions->course->course_name); ?></td>
                </tr>
                <tr>
                    <th scope="row">Course Short Name</th>
                    <td><?php echo e($sessions->course->short_name); ?></td>
                </tr>
                <tr>
                    <th scope="row">Course Credit</th>
                    <td><?php echo e($sessions->course->credit); ?></td>
                </tr>
                <tr>
                    <th scope="row">Course Type</th>
                    <td><?php echo e($sessions->course->type); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.two_col', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Spring 2023\SD\xampp\htdocs\sadia\resources\views/admin/pages/admin/sessions/show.blade.php ENDPATH**/ ?>