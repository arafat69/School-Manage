<?php $page = 'department' ?>


<?php $__env->startSection('content'); ?>
    <div class="page-title">
        <h3>Department Trash View</h3>
    </div>

    <div class="add-section my-2">
        <a href="<?php echo e(url()->previous()); ?>" class="btn btn-primary"><i class="bi bi-arrow-left"></i> Go Back</a>
    </div>


    <div class="table-responsive" id="printelement">
        <table id="myTable" class="table table-bordered table-striped">
            <thead class="table-success">
                <tr>
                    <th class="text-center">No</th>
                    <th>Department Name</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i=1;?>
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td class="text-center"><?php echo e($i); ?></td>
                    <td><?php echo e($department->name); ?></td>
                    <td><?php echo e($department->date); ?></td>
                    <td>
                        <?php if(session('Admin_Login_id')): ?>
                        <a href="<?php echo e(url('/department_delete_undo/'.$department->id)); ?>" class="btn btn-info btn-sm my-1"
                             title="Undo"><i class="bi bi-arrow-return-left icon icon-left"></i>
                        </a>
                        <a href="<?php echo e(url('/department_delete_parmanent/'.$department->id)); ?>" class="btn btn-danger btn-sm my-1"
                            onclick="return confirm('Are You Sure! Delete Parmanent')" title="Delete">
                            <i class="bi bi-trash-fill icon icon-left"></i>
                        </a>
                        <?php else: ?>
                        <small>No Action</small>
                        <?php endif; ?>
                    </td>
                </tr>

                <?php $i++;?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Xampp\htdocs\schoolmanagement\resources\views//department_trash.blade.php ENDPATH**/ ?>