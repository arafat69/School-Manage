<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in - School Management Admin Dashboard</title>
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap.css')); ?>">

    <link rel="shortcut icon" href="" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/app.css')); ?>">
</head>

<body>
    <div id="auth">

        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-12 mx-auto">
                    <div class="card pt-3">
                        <div class="card-body">
                            <div class="text-center mb-3">
                                <!-- <img src="assets/images/favicon.svg" height="48" class='mb-4'> -->
                                <?php if(session('msg')): ?>
                                <div class="alert alert-danger" role="alert">
                                    <span class=""><?php echo e(session('msg')); ?></span>
                                </div>
                                <?php endif; ?>

                                <h3>Admin Dashboard</h3>
                                <p>Please Login to continue</p>
                            </div>
                            <form action="<?php echo e(url('/login_submit')); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <div class="form-group position-relative has-icon-left">
                                    <label for="username">Username</label>
                                    <div class="position-relative">
                                        <input type="text" class="form-control" id="username" name="username" placeholder="username">
                                        <div class="form-control-icon">
                                            <i data-feather="user"></i>
                                        </div>
                                    </div>
                                    <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-danger"><?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                                </div>
                                <div class="form-group position-relative has-icon-left mb-3">
                                    <div class="clearfix">
                                        <label for="password">Password</label>
                                        <a href="#" class='float-end mt-1'>
                                            <span>Forgot password?</span>
                                        </a>
                                    </div>
                                    <div class="position-relative">
                                        <input type="password" class="form-control" id="password" name="password" placeholder="password">
                                        <div class="form-control-icon">
                                            <i data-feather="lock"></i>
                                        </div>
                                    </div>
                                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-danger"><?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <button type="submit" class="btn btn-block mb-2 btn-primary"><i data-feather="log-in"></i>
                                        Submit</button>
                                </div>
                                <div class="col-sm-6">
                                    <button type="reset" class="btn btn-block mb-2 btn-secondary"><i data-feather="refresh-ccw"></i>
                                        Reset</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="<?php echo e(asset('assets/js/feather.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/app.js')); ?>"></script>

    <script src="<?php echo e(asset('assets/js/main.js')); ?>"></script>
</body>

</html>
<?php /**PATH F:\Xampp\htdocs\schoolmanagement\resources\views/login.blade.php ENDPATH**/ ?>