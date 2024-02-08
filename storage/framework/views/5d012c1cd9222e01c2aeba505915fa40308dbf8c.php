<?php $__env->startSection('title', 'Student Details'); ?>

<?php $__env->startSection('main_section'); ?>
<div class="container">
    <div class="text-center">
        <h3>Student Details</h3>
    </div>
    <div class="text-end">
        <button class="btn btn-warning"><a href="/student-form" class="text-decoration-none text-dark">Add Student</a></button>
    </div>
    <div class="table table-responsive fixTableHead first_content">
        <table id="example" class="table table-borderless">
            <thead>
                <tr>
                    <th class="ps-3 pe-0 align-middle">Student Name</th>
                    <th class="ps-0 pe-0 align-middle">Roll Number</th>
                    <th class="ps-0 pe-0 align-middle">Age</th>
                    <th class="ps-0 pe-0 align-middle">Total Marks</th>
                    <th class="ps-0 pe-0 align-middle">Average Marks</th>
                </tr>
            </thead>
            <tbody>
                <?php if(isset($results)): ?>
                <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="ps-3 pe-0 align-middle"><?php echo e($result['student_name']); ?></td>
                        <td class="ps-3 pe-0 align-middle"><?php echo e($result['roll_number']); ?></td>
                        <td class="ps-3 pe-0 align-middle"><?php echo e($result['age']); ?></td>
                        <td class="ps-3 pe-0 align-middle"><?php echo e($result['total_mark']); ?></td>
                        <td class="ps-3 pe-0 align-middle"><?php echo e($result['average_mark']); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\studentdetail\resources\views/student_table.blade.php ENDPATH**/ ?>