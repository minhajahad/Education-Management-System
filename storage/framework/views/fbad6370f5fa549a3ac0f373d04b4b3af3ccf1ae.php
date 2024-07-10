<?php $__env->startSection('title','/Edit Session'); ?>
<?php $__env->startSection('content'); ?>
<h1 class="h3 mb-3 mx-3">Edit Session</h1>

<div class="card-header">
    Edit Courses <a class="btn btn-info mx-2" href="<?php echo e(url('admin/assigned_courses/index')); ?>">List</a>

</div>

<div class="card-body">
    <form action="<?php echo e(url('admin/assigned_courses/update',['session'=>$session->id] )); ?>" method="post" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label for="inputBrandTitle" class="col-sm-3 col-form-label">Session</label>
            <div class="col-8">
                <select name="add_session_id" id="" class="form-control">
                    <option value="">Select Session</option>
                    <?php $__currentLoopData = $add_sessions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option <?php echo e(($s->id == $session->add_session_id) ? 'selected' : ''); ?> value="<?php echo e($s->id); ?>"><?php echo e($s->session); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <?php $__errorArgs = ['session'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="alert alert-danger"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
        </div>

        <div class="mb-3">
            <label for="inputTitle" class="col-sm-3 col-form-label">Section</label>
            <div class="col-8">
                <select name="section" id="" class="form-control">
                    <option value="A"<?php echo e($session->section == 'A' ? "selected" : ''); ?>>A</option>
                    <option value="B"<?php echo e($session->section == 'B' ? "selected" : ''); ?>>B</option>
                    <option value="C"<?php echo e($session->section == 'C' ? "selected" : ''); ?>>C</option>
                    <option value="D"<?php echo e($session->section == 'D' ? "selected" : ''); ?>>D</option>
                    <option value="E"<?php echo e($session->section == 'E' ? "selected" : ''); ?>>E</option>
                </select>
                <?php $__errorArgs = ['section'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="alert alert-danger"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
        </div>

        <div class="mb-3">
            <label for="inputPicture" class="col-sm-3 col-form-label">Course Name</label>
            <div class="col-8">
                <select name="course_id" class="form-select">
                    <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option <?php echo e(($c->id == $session->course_id) ? 'selected' : ''); ?> value="<?php echo e($c->id); ?>"><?php echo e($c->course_name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
        </div>

        <div class="mb-3">
            <label for="inputPicture" class="col-sm-3 col-form-label">Teacher's Name</label>
            <div class="col-8">
                <select name="user_id" class="form-select">
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option <?php echo e(($u->id == $session->user_id) ? 'selected' : ''); ?> value="<?php echo e($u->id); ?>"><?php echo e($u->first_name); ?> <?php echo e($u->last_name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
        </div>

        <div class="mb-3">
            <div class="col-sm-8">
                <button type="submit" class="btn btn-info">Update</button>
            </div>

        </div>

    </form>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.two_col', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Spring 2023\SD\xampp\htdocs\sadia\resources\views/admin/pages/admin/sessions/edit.blade.php ENDPATH**/ ?>