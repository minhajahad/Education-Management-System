<?php $__env->startSection('title', '/Enroll'); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-12">
        <div class="bg-light rounded h-100 p-4">
            <h1 class="h3 mb-3 mx-3">Enrollment</h1>

            <div class="card-header">
                Enroll <a class="btn btn-info mx-2" href="<?php echo e(url('student/enroll/index')); ?>">Enrollment Status</a>
            </div>

            <form action="<?php echo e(url('student/enroll/post')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="my-3">
                    <label for="inputBrandTitle" class="col-sm-3 col-form-label mx-3">Session</label>
                    <div class="col-8">
                        <select name="session" id="session" class="form-control mx-3">
                            <option value="">Select Session</option>
                            <?php $__currentLoopData = $add_sessions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($s->id); ?>"><?php echo e($s->session); ?></option>
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

                <div class="table-responsive m-3" id="course" name="course">
                    <table class="table text-center ">
                        <thead>
                            <tr>
                                <th scope="col">Select</th>
                                <th scope="col">SL</th>
                                <th scope="col">Course Code</th>
                                <th scope="col">Course Name</th>
                                <th scope="col">Section</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
                    </table>
                    <div class="mb-3">
                        <div class="col-sm-8">
                            <button type="submit" name="submit" id="button" class="btn btn-info">Enroll</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#session").change(function() {
                var add_session_id = $(this).val();
                $("#course tbody").empty(); // Clear the table body
                if (!add_session_id) {
                    return; // No session selected, so no need to proceed
                }

                $.ajax({
                    url: 'http://127.0.0.1:8000/api/enrollment/' + add_session_id,
                    dataType: "json",
                    type: 'GET',
                    success: function(res) {
                        var add_sessions = res.add_sessions;
                        var len = add_sessions.length;

                        for (var i = 0; i < len; i++) {
                            var newRow = '<tr value="' + add_sessions[i].id +
                                '" data-department="' + add_sessions[i].department_id + '">' +
                                '<td>' +
                                '<div class="col-8">' +
                                '<div class="form-check">' +
                                '<label class="form-check-label">' +
                                '<input type="checkbox" class="form-check-input" name="courses[]" value="' +
                                add_sessions[i].id + '">' +
                                '</label>' +
                                '</div>' +
                                '</div>' +
                                '</td>' +
                                '<td>' + (i + 1) + '</td>' +
                                '<td>' + add_sessions[i].course_code + '</td>' +
                                '<td>' + add_sessions[i].course_name + '</td>' +
                                '<td>' + add_sessions[i].section + '</td>' +
                                '</tr>';
                            $("#course tbody").append(newRow);
                        }
                    }
                });
            });

            $("form").submit(function() {
                // This code will be executed when the form is submitted
                // No need for AJAX here, the form will be submitted traditionally
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.two_col', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Spring 2023\SD\xampp\htdocs\sadia\resources\views/admin/pages/student/enrollment/create.blade.php ENDPATH**/ ?>