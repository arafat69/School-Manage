<?php $page = 'teacher' ?>


<?php $__env->startSection('content'); ?>
    <div class="page-title">
        <h3>Add New Teacher</h3>
    </div>

    <form action="<?php echo e(url('/add_new_teacher')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="row">
            <div class="col-md-8">
                <div class="card m-0">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="" class="fw-bold">Teacher Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Full Name">
                            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="text-danger"> <?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="" class="fw-bold">Qualification</label>
                                    <input type="text" class="form-control" name="qualification" placeholder="Qualification/Base">
                                    <?php $__errorArgs = ['qualification'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-danger"> <?php echo e($message); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="" class="fw-bold">Select Department</label>
                                    <select name="department" class="choices form-select">
                                        <?php $__currentLoopData = $department; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($department->name); ?>"><?php echo e($department->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="" class="fw-bold">Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="Email Address">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="" class="fw-bold">Phone Number</label>
                                    <input type="number" name="phone" class="form-control" placeholder="Phone Number">
                                    <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-danger"> <?php echo e($message); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="fw-bold">Address</label>
                            <input type="text" name="address" class="form-control" placeholder="Address">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-0 mt-1 mt-md-0">
                    <div class="card-body">
                        <h5>Select Teacher Photo</h5>
                        <div class="st_img">
                            <img src="assets/images/avatar/avatar-1.png" width="100%" height="100%" id="output">
                        </div>
                        <input type="file" name="photo" id="image" accept="image/*" onchange="loadFile(event)">
                        <label for="image" class="btn btn-primary mt-1"><i class="bi bi-image"></i> Select A
                            Photo</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-0 mt-1">
            <div class="card-body">
                <?php if(session('Admin_Login_id')): ?>
                <button class="btn btn-primary btn-lg">Submit</button>
           <?php else: ?>
               <button class="btn btn-primary btn-lg" disabled>Please Login</button>
           <?php endif; ?>
            </div>
        </div>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Xampp\htdocs\schoolmanagement\resources\views//add_teacher.blade.php ENDPATH**/ ?>