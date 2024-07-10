<?php $__env->startSection('title', '/Assign Marks'); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-12">
        <div class="bg-light rounded h-100 p-4">
            <h1 class="h3 mb-3 mx-3">Assign Marks</h1>
            <div class="card-header">
                Marking <a class="btn btn-info mx-2" href="<?php echo e(url('teacher/marks-distribution')); ?>">Distribute Marks</a>
            </div>
            <?php if(session('success')): ?>
                <div class="alert alert-success">
                    <?php echo e(session('success')); ?>

                </div>
            <?php endif; ?>

            <div class="card-body">
                <form enctype="multipart/form-data" method="post">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="department_id" value="<?php echo e($user_department_id); ?>">
                    <div class="mb-3">
                        <div class="col-8">
                            <label for="session">Select Session:</label>
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
                    <div class="mb-3">
                        <div class="col-8">
                            <label for="course">Select Course:</label>
                            <select name="course" class="form-control mx-3" id="course">
                                <option value="">Select Course</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="col-11">
                            <table id="teacherassign" class="table table-striped table-bordered m-3 text-center"
                                style="width:100%;">
                                <thead id="theads" class="text-center">
                                    <tr>
                                        <th>Student ID</th>
                                        <th>Student's Name</th>

                                    </tr>
                                </thead>

                                <tbody id="dynamic">
                                    
                                    <?php $__currentLoopData = $enrollments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $enrollment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($enrollment->user->student_id); ?></td>
                                            <td><?php echo e($enrollment->user->first_name); ?> <?php echo e($enrollment->user->last_name); ?></td>
                                            <?php $__currentLoopData = $categoryNames; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoryName): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <td>
                                                    <input type="number" class="form-control"
                                                        name="marks[student_id][category_name]"
                                                        value="<?php echo e($enrollment->marks[$categoryName] ?? ''); ?>">
                                                </td>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            
                                            <td>
                                                <input type="number" class="form-control"
                                                    name="total_marks[<?php echo e($enrollment->id); ?>]"
                                                    value="<?php echo e($enrollment->total_marks ?? ''); ?>">
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>

                            </table>
                        </div>
                    </div>
                    <div class="mb-3 mx-3">
                        <button type="submit" name="submit" id="button" class="btn btn-primary">Assign</button>
                    </div>
                </form>
                <?php if($errors->any()): ?>
                    <div class="alert alert-danger mx-3">
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#teacherassign').hide();
            $('#button').hide();
            $("#session").change(function() {
                var add_session_id = $(this).val();
                $("#course").empty();
                if (!add_session_id) {
                    $('#teacherassign').hide();
                    $('#button').hide();
                }
                $.ajax({
                    url: 'http://127.0.0.1:8000/api/enrollment/' + add_session_id,
                    dataType: "json",
                    type: 'GET',
                    success: function(res) {
                        var add_sessions = res.add_sessions;
                        var len = add_sessions.length;
                        var str = '<option value="">Select Course</option>';
                        for (var i = 0; i < len; i++) {
                            str += '<option value="' + add_sessions[i].id + '">' +
                                add_sessions[i].course_name + ' - ' + add_sessions[i].section +
                                '</option>';
                        }
                        $("#course").append(str);
                        $('#teacherassign').hide();
                        $('#button').hide();
                    }
                });
            });
            $("#course").change(function() {
                var courseId = $(this).val();
                if (courseId) {
                    $.ajax({
                        url: 'http://127.0.0.1:8000/api/course-enrollments/' + courseId,
                        dataType: "json",
                        type: 'GET',
                        success: function(res) {
                            var students = res.students; // Access the 'students' array
                            var categoryNames = res.categoryNames;
                            var marksData = res.marksData;

                            var tableHeaders = '<tr>' +
                                '<th>Student ID</th>' +
                                '<th>Student\'s Name</th>';
                            categoryNames.forEach(function(categoryName) {
                                tableHeaders += '<th>' + categoryName + '</th>';
                            });
                            tableHeaders += '<th>Total</th>'; // Add the "Total" header
                            tableHeaders += '</tr>';
                            $("#theads").html(tableHeaders);
                            var tableRows = '';
                            students.forEach(function(student) {
                                var totalMarksForStudent = 0;
                                tableRows += '<tr>' +
                                    '<td>' + student.user.student_id + '</td>' +
                                    '<td>' + student.user.first_name + ' ' + student
                                    .user.last_name + '</td>';
                                categoryNames.forEach(function(categoryName) {
                                    // Find the marksData entry for this student and category
                                    var marksEntry = marksData.find(function(
                                        entry) {
                                        return entry.category_name ===
                                            categoryName;
                                    });
                                    // Insert marks if entry exists, otherwise insert an empty cell
                                    if (marksEntry) {
                                        var marks = parseFloat(marksEntry
                                            .marks);
                                        tableRows +=
                                            '<td><input type="number" class="form-control" name="" id="">/' +
                                            marks + '</td>';
                                        totalMarksForStudent += marks
                                    } else {
                                        tableRows += '<td></td>';
                                    }
                                });
                                // Calculate and insert total marks here
                                // Insert the total marks for this student in the "Total" column
                                tableRows += '<td>/' + totalMarksForStudent + '</td>';
                                tableRows += '</tr>';
                            });
                            $("#dynamic").html(tableRows);
                            $('#teacherassign').show();
                            $('#button').show();
                        }
                    });
                } else {
                    $('#teacherassign').show();
                    $('#button').hide();
                }
            });
            $('#button').click(function() {
                $('form').submit(); // Trigger the form submission when the button is clicked
            });

            $('form').submit(function(e) {
                e.preventDefault(); // Prevent the default form submission

                // Serialize the form data
                var formData = $(this).serialize();

                // Perform an AJAX POST request to submit the form data
                $.ajax({
                    url: 'http://127.0.0.1:8000/api/teacher/assigned-marks', // Update the URL
                    type: 'POST',
                    data: formData,
                    success: function(response) {
                        // Handle the success response (e.g., show a success message)
                        console.log(response);
                    },
                    error: function(xhr) {
                        // Handle any errors (e.g., show an error message)
                        console.error(xhr.responseText);
                    }
                });
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.two_col', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Spring 2023\SD\xampp\htdocs\sadia\resources\views/admin/pages/teacher/assign_marks.blade.php ENDPATH**/ ?>