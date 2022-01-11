<?php $page = 'teacher' ?>


<?php $__env->startSection('content'); ?>
    <div class="page-title">
        <h3>Teacher Trash View</h3>
    </div>

    <div class="add-section my-2">
        <a href="<?php echo e(url()->previous()); ?>" class="btn btn-primary"><i class="bi bi-arrow-left"></i> Go Back</a>
    </div>


    <div class="table-responsive" id="printelement">
        <table id="myTable" class="table table-bordered table-striped">
            <thead class="table-success">
                <tr>
                    <th class="text-center">No</th>
                    <th>Name</th>
                    <th>Department</th>
                    <th>Qualification</th>
                    <th>Photo</th>
                    <th>Action</th>
                  </tr>
            </thead>
            <tbody>
                <?php $i=1;?>
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $teacher): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td class="text-center"><?php echo e($i); ?></td>
                <td><?php echo e($teacher->name); ?></td>
                <td><?php echo e($teacher->department); ?></td>
                <td><?php echo e($teacher->qualification); ?></td>
                <td>
                  <img src="<?php echo e(asset('storage/teacher/'.$teacher->photo)); ?>" width="50" height="50">
                </td>
                    <td>
                      <?php if(session('Admin_Login_id')): ?>
                      <a href="<?php echo e(url('/teacher_delete_undo/'.$teacher->id)); ?>" class="btn btn-info btn-sm my-1"
                        title="Undo"><i class="bi bi-arrow-return-left icon icon-left"></i>
                   </a>
                      <a href="<?php echo e(url('/teacher_delete_permanent/'.$teacher->id)); ?>" class="btn btn-danger btn-sm my-1" onclick="return confirm('Are You Sure! Delete This..')"
                        title="Delete">
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

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Xampp\htdocs\schoolmanagement\resources\views//teacher_trash.blade.php ENDPATH**/ ?>