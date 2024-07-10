<?php $__env->startSection('title', '/Enrollment Status'); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-12">
        <div class="bg-light rounded h-100 p-4">
            <h1 class="h3 mb-3 mx-3">Enrollment Status</h1>

            <div class="card-header">
                Status <a class="btn btn-info mx-2" href="<?php echo e(url('student/enroll/create')); ?>">Enroll</a>
            </div>

            <?php if(session('success')): ?>
                <div class="alert alert-success">
                    <?php echo e(session('success')); ?>

                </div>
            <?php endif; ?>

            <div class="table-responsive m-3" id="enrollmentTable">
                <table class="table text-center">
                    <thead>
                        <tr>
                            <th scope="col">Session</th>
                            <th scope="col">Course Code</th>
                            <th scope="col">Course Name</th>
                            <th scope="col">Section</th>
                            <th scope="col">Assigned Teacher</th>
                        </tr>
                    </thead>
                    <tbody class="my-3">
                        <?php $__currentLoopData = $enrollments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $enrollment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($enrollment->session); ?></td>
                                <td><?php echo e($enrollment->course_code); ?></td>
                                <td><?php echo e($enrollment->course_name); ?></td>
                                <td><?php echo e($enrollment->section); ?></td>
                                <td><?php echo e($enrollment->first_name); ?> <?php echo e($enrollment->last_name); ?></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.two_col', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Spring 2023\SD\xampp\htdocs\sadia\resources\views/admin/pages/student/enrollment/index.blade.php ENDPATH**/ ?>