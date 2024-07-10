<?php $__env->startSection('title','Edit Courses'); ?>
<?php $__env->startSection('content'); ?>
<h1 class="h3 mb-3 mx-3">Edit Courses</h1>

<div class="card-header">
    Edit Courses <a class="btn btn-info mx-2" href="<?php echo e(url('admin/courses/index')); ?>">List</a>

</div>

<div class="card-body">
    <form action="<?php echo e(url('admin/courses/update',['course'=>$course->id] )); ?>" method="post" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label for="inputTitle" class="col-sm-3 col-form-label">Course Code</label>
            <div class="col-8">
                <input type="text" class="form-control" id="inputTitle" name="course_code" value="<?php echo e(old('course_code',$course->course_code)); ?>">
                <?php $__errorArgs = ['course_code'];
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
            <label for="inputTitle" class="col-sm-3 col-form-label">Course Name</label>
            <div class="col-8">
                <input type="text" class="form-control" id="inputTitle" name="course_name" value="<?php echo e(old('course_name',$course->course_name)); ?>">
                <?php $__errorArgs = ['course_name'];
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
            <label for="inputTitle" class="col-sm-3 col-form-label">Course Short Name</label>
            <div class="col-8">
                <input type="text" class="form-control" id="inputTitle" name="short_name" value="<?php echo e(old('short_name',$course->short_name)); ?>">
                <?php $__errorArgs = ['short_name'];
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
            <label for="inputTitle" class="col-sm-3 col-form-label">Credit</label>
            <div class="col-8">
                <select name="credit" id="" class="form-control">
                    <option value="1" <?php echo e($course->credit == '1' ? "selected" : ''); ?>>1</option>
                    <option value="1.5" <?php echo e($course->credit == '1.5' ? "selected" : ''); ?>>1.5</option>
                    <option value="2" <?php echo e($course->credit == '2' ? "selected" : ''); ?>>2</option>
                    <option value="3" <?php echo e($course->credit == '3' ? "selected" : ''); ?>>3</option>
                    <option value="4" <?php echo e($course->credit == '4' ? "selected" : ''); ?>>4</option>
                </select>
                <?php $__errorArgs = ['credit'];
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
            <label for="inputBrandTitle" class="col-sm-3 col-form-label">Type</label>
            <div class="col-8">
                <select name="type" id="" class="form-control">
                    <option value="Theory" <?php echo e($course->type == "Theory" ? "selected" : " "); ?>>Theory</option>
                    <option value="Lab" <?php echo e($course->type == "Lab" ? "selected" : " "); ?>>Lab</option>
                    <option value="Project" <?php echo e($course->type == "Project" ? "selected" : " "); ?>>Project</option>
                    <option value="Thesis" <?php echo e($course->type == "Thesis" ? "selected" : " "); ?>>Thesis</option>
                </select>
                <?php $__errorArgs = ['type'];
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
            <label for="inputPicture" class="col-sm-3 col-form-label">Department</label>
            <div class="col-8">
                <select name="department_id" class="form-select">
                    <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option <?php echo e(($d->id == $course->department_id) ? 'selected' : ''); ?> value="<?php echo e($d->id); ?>"><?php echo e($d->dept_name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
        </div>
        <div class="mb-3">
            <div class="col-sm-8">
                <button type="submit" class="btn btn-info">Submit</button>
            </div>

        </div>

    </form>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.two_col', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Spring 2023\SD\xampp\htdocs\sadia\resources\views/admin/pages/admin/courses/edit.blade.php ENDPATH**/ ?>