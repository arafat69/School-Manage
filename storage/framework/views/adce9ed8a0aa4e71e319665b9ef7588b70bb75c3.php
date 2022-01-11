<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> <?php echo $__env->yieldContent('title', 'School Management System'); ?> </title>

    <link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap.css')); ?>" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="<?php echo e(asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/app.css')); ?>" />
    <link rel="icon" href="" type="image/x-icon" />
    <link rel="stylesheet" href="<?php echo e(asset('css/datatables.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('css/toastr.min.css')); ?>">
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header m-0">
                    <!-- <img src="assets/images/logo.svg" alt="" srcset=""> -->
                    <span style="font-size: 20px">School Management</span>
                </div>
                <hr class="m-0 p-0" />
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Main Menu</li>

                        <li class="sidebar-item <?php if($page === 'dashboard'): ?> active <?php endif; ?>">
                            <a href="<?php echo e(url('dashboard')); ?>" class="sidebar-link">
                                <i data-feather="home" width="20"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="sidebar-item <?php if($page === 'student'): ?> active <?php endif; ?>">
                            <a href="<?php echo e(url('student')); ?>" class="sidebar-link">
                                <i data-feather="users" width="20"></i>
                                <span>Student</span>
                            </a>
                        </li>
                        <li class="sidebar-item <?php if($page === 'teacher'): ?> active <?php endif; ?>">
                            <a href="<?php echo e(url('teacher')); ?>" class="sidebar-link">
                                <i data-feather="user" width="20"></i>
                                <span>Teacher</span>
                            </a>
                        </li>

                        <li class="sidebar-item <?php if($page === 'department'): ?> active <?php endif; ?>">
                            <a href="<?php echo e(url('department')); ?>" class="sidebar-link">
                                <i data-feather="user" width="20"></i>
                                <span>Department</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <button class="sidebar-toggler btn x">
                    <i data-feather="x"></i>
                </button>
            </div>
        </div>
        <div id="main">
            <nav class="navbar navbar-header navbar-expand navbar-light">
                <a class="sidebar-toggler" href="#"><span class="navbar-toggler-icon"></span></a>
                <button class="btn navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav d-flex align-items-center navbar-light ms-auto">
                        <li class="dropdown nav-icon">
                            <a href="#" data-bs-toggle="dropdown"
                                class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                                <div class="d-lg-inline-block">
                                    <i data-feather="bell"></i>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-large">
                                <h6 class="py-2 px-4">Notifications</h6>
                                <ul class="list-group rounded-none">
                                    <li class="list-group-item border-0 align-items-start">
                                        <div class="avatar bg-success me-3">
                                            <span class="avatar-content"><i data-feather="shopping-cart"></i></span>
                                        </div>
                                        <div>
                                            <h6 class="text-bold">New Order</h6>
                                            <p class="text-xs">
                                                An order made by Ahmad Saugi for product Samsung
                                                Galaxy S69
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <?php if(session('Admin_Login_id')): ?>

                            <li class="dropdown">
                                <a href="#" data-bs-toggle="dropdown"
                                    class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                                    <div class="avatar me-1">
                                        <img src="<?php echo e(asset('assets/images/avatar/avatar-s-11.png')); ?>" alt="" srcset="" />
                                    </div>
                                    <div class="d-none d-md-block d-lg-inline-block">
                                        Hi, <?php echo e(session('Admin_Login_name')); ?>

                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item active" href="#"><i data-feather="user"></i> Account</a>
                                    <a class="dropdown-item" href="#"><i data-feather="mail"></i> Messages</a>
                                    <a class="dropdown-item" href="#"><i data-feather="settings"></i> Settings</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="<?php echo e(url('/logout')); ?>"><i data-feather="log-out"></i> Logout</a>
                                </div>
                            </li>

                        <?php else: ?>
                            <a href="<?php echo e(url('login')); ?>" class="btn btn-primary font-bold" style="letter-spacing: 2px;">LOGIN</a>
                        <?php endif; ?>

                    </ul>
                </div>
            </nav>

            <!-- navbr end -->
            <div class="main-content container-fluid">

                <?php $__env->startSection('content'); ?>


                <?php echo $__env->yieldSection(); ?>

            </div>
        </div>
        <?php $__env->startSection('javascript'); ?>

            <script src="<?php echo e(asset('js/jquery-3.6.0.min.js')); ?>"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js"></script>
            <script src="<?php echo e(asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js')); ?>"></script>
            <script src="<?php echo e(asset('assets/js/app.js')); ?>"></script>
            <script src="<?php echo e(asset('assets/js/pages/dashboard.js')); ?>"></script>
            <script src="<?php echo e(asset('js/imagepreview.js')); ?>"></script>
            <script src="<?php echo e(asset('js/toastr.min.js')); ?>"></script>
            <script src="<?php echo e(asset('js/datatables.min.js')); ?>"></script>
            <script src="<?php echo e(asset('assets/js/main.js')); ?>"></script>
            <script src="<?php echo e(asset('js/jQuery.print.min.js')); ?>"></script>

            <?php if(Session::has('success_msg')): ?>
                <script>
                    toastr.success('<?php echo e(session('success_msg')); ?>');
                </script>
            <?php endif; ?>

            <script>
                $(document).ready(function() {
                    $("#myTable").DataTable({
                        ordering: false,
                    });
                });

                function myprintelement() {
                    $("#printelement").print();
                }

                function detailsprint(id) {
                    var id= '#detailsprint'+id;
                    $(id).print();
                }
            </script>

        <?php echo $__env->yieldSection(); ?>

</body>

</html>
<?php /**PATH F:\Xampp\htdocs\schoolmanagement\resources\views/master.blade.php ENDPATH**/ ?>