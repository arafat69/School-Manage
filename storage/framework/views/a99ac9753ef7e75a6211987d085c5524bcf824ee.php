<?php $page = 'department' ?>


<?php $__env->startSection('content'); ?>
    <div class="page-title">
        <h3>Department</h3>
    </div>

    <div class="add-section my-2">
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addDepartment">
            <i class="bi bi-plus-circle-dotted btn-icon"></i> Add New Department
        </button>
        <button class="btn btn-success" onclick="myprintelement()">
            <i class="bi bi-printer btn-icon"></i> Print
        </button>
        
         <a href="<?php echo e(url('/department/trash')); ?>" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i> Trash</a>

    </div>


    <!-- Add Department -->
    <div class="modal fade" id="addDepartment">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h5 class="modal-title text-white">Add New Department</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?php echo e(url('/department_add')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="fw-bold">Department Name</label>
                            <input type="text" name="department" class="form-control" placeholder="Department Name"
                                required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                            <i class="bi bi-x btn-icon"></i> Close
                        </button>
                        <?php if(session('Admin_Login_id')): ?>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <?php else: ?>
                        <button type="submit" class="btn btn-primary" disabled>Please Login</button>
                        <?php endif; ?>
                    </div>
                </form>
            </div>
        </div>
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
                        <button data-bs-toggle="modal" data-bs-target="#DepartmentEdit<?php echo e($department->id); ?>" class="btn btn-sm btn-info my-1"
                            title="Edit">
                            <i class="bi bi-pencil-square icon icon-left"></i>
                        </button>
                        <a href="<?php echo e(url('/department_delete/'.$department->id)); ?>" class="btn btn-danger btn-sm my-1"
                            onclick="return confirm('Are You Sure! Delete This..')" title="Delete">
                            <i class="bi bi-trash-fill icon icon-left"></i>
                        </a>
                        <?php else: ?>
                        <small>No Action</small>
                        <?php endif; ?>
                    </td>
                </tr>

                <!-- edit department -->
                <div class="modal fade" id="DepartmentEdit<?php echo e($department->id); ?>">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header bg-success">
                                <h5 class="modal-title text-white"><i class="bi bi-pencil"></i> Edit Department</h5>
                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="<?php echo e(url('/department_edit/'.$department->id)); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="" class="fw-bold">Department Name</label>
                                        <input type="text" class="form-control" name="department" value="<?php echo e($department->name); ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="fw-bold">Date</label>
                                        <input type="text" class="form-control" name="date" value="<?php echo e($department->date); ?>">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-success">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <?php $i++;?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Xampp\htdocs\schoolmanagement\resources\views//department.blade.php ENDPATH**/ ?>