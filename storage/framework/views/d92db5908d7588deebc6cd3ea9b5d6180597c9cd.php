<?php $page = 'student'; ?>


<?php $__env->startSection('content'); ?>
    <div class="page-title">
        <h3>Add New Student</h3>
    </div>

    <form action="<?php echo e(url('/add_new_student')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="row">
            <div class="col-md-8">
                <div class="card m-0">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="" class="fw-bold">Student Name</label>
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
                                    <label for="" class="fw-bold">Father Name</label>
                                    <input type="text" class="form-control" name="father" placeholder="Father Name">
                                    <?php $__errorArgs = ['father'];
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
                                    <label for="" class="fw-bold">Mother Name</label>
                                    <input type="text" class="form-control" name="mother" placeholder="Mother Name">
                                    <?php $__errorArgs = ['mother'];
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
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="" class="fw-bold">Roll Number</label>
                                    <input type="text" class="form-control" name="roll" placeholder="Roll Number">
                                    <?php $__errorArgs = ['roll'];
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
                                    <label for="" class="fw-bold">Reg Number</label>
                                    <input type="text" class="form-control" name="reg" placeholder="Registration Number">
                                    <?php $__errorArgs = ['reg'];
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

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="" class="fw-bold">Select Department</label>
                                    <select name="department" class="form-select form-select-sm">
                                        <?php $__currentLoopData = $department; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($department->name); ?>"><?php echo e($department->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="" class="fw-bold">Select Semester</label>
                                    <select name="semester" class="form-select form-select-sm">
                                        <option value="1st">1st</option>
                                        <option value="2nd">2nd</option>
                                        <option value="3rd">3rd</option>
                                        <option value="4th">4th</option>
                                        <option value="5th">5th</option>
                                        <option value="6th">6th</option>
                                        <option value="7th" selected>7th</option>
                                        <option value="8th">8th</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="" class="fw-bold">Select Shift</label>
                                    <select name="shift" class="form-select form-select-sm">
                                        <option value="1st">1st</option>
                                        <option value="2nd">2nd</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="" class="fw-bold">Session</label>
                                    <input type="text" name="session" class="form-control" placeholder="Session">
                                    <?php $__errorArgs = ['session'];
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
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="" class="fw-bold">Email</label>
                                    <input type="email" name="email" class="form-control"
                                        placeholder="Email Address (option)">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="" class="fw-bold">Phone Number</label>
                                    <input type="number" name="phone" class="form-control"
                                        placeholder="Phone Number (option)">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="fw-bold">Address</label>
                            <input type="text" name="address" class="form-control" placeholder="Address (option)">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-0 mt-1 mt-md-0">
                    <div class="card-body">
                        <h5>Select Student Photo</h5>
                        <div class="st_img">
                            <img src="assets/images/avatar/avatar-male.jpg" width="100%" height="100%" id="output">
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

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Xampp\htdocs\schoolmanagement\resources\views//add_student.blade.php ENDPATH**/ ?>