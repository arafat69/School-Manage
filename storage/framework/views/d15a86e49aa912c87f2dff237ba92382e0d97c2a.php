<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>School Management System</title>
    <link rel="stylesheet" href="<?php echo e(asset('main/css/reset.css')); ?>">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('main/css/style.css')); ?>">
</head>
<body>
    <div id="hero-slider">
        <div id="logo" class="mask">
            <span class="logo-text masked">Arafat Ali</span>
        </div>
        <div id="slideshow">
            <a href="dashboard" class="startbtn">get Start</a>
            <div id="slides-main" class="slides">
                <div class="slide" data-index="0">
                    <div class="abs-mask">
                        <div class="slide-image" style="background-image: url(<?php echo e(asset('main/img/slide-1.jpg')); ?>)"></div>
                    </div>
                </div>
                <div class="slide" data-index="1">
                    <div class="abs-mask">
                        <div class="slide-image" style="background-image: url(<?php echo e(asset('main/img/slide-2.jpg')); ?>)"></div>
                    </div>
                </div>
                <div class="slide" data-index="2">
                    <div class="abs-mask">
                        <div class="slide-image" style="background-image: url(<?php echo e(asset('main/img/slide-3.jpg')); ?>)"></div>
                    </div>
                </div>
                <div class="slide" data-index="3">
                    <div class="abs-mask">
                        <div class="slide-image" style="background-image: url(<?php echo e(asset('main/img/slide-4.jpg')); ?>)"></div>
                    </div>
                </div>
            </div>
            <div id="slides-aux" class="slides mask">
                <h2 class="slide-title slide" data-index="0"><a href="dashboard" style="color: #ffff;">Student Manage</a></h2>
                <h2 class="slide-title slide" data-index="1"><a href="dashboard" style="color: #ffff;">Teacher Manage</a></h2>
                <h2 class="slide-title slide" data-index="2"><a href="dashboard" style="color: #ffff;">Easy List Print</a></h2>
                <h2 class="slide-title slide" data-index="3"><a href="dashboard" style="color: #ffff;">Notice Manage</a></h2>
            </div>
        </div>
        <div id="info">
            <div class="slider-title-wrapper">
                <span class="line"></span>
                <h5 class="slider-title">
                    <span>School <small style="font-size: 30px !important;">project</small></span>
                </h5>
            </div>
            <div class="about">
                <p>
                    The School Management Layout<br/>
                   Responsive  Design And Developed<br/>
                    by <a href="#" target="_blank">Arafat Ali</a>,
                    repo on <a href="#" target="_blank">Github</a>
                </p>
            </div>
        </div>
        <nav id="slider-nav">
            <span class="current">01</span>
            <span class="sep"></span>
            <span class="total">04</span>
        </nav>
    </div>
    <script src="<?php echo e(asset('main//js/main.js')); ?>"></script>
</body>

</html><?php /**PATH F:\Xampp\htdocs\schoolmanagement\resources\views/index.blade.php ENDPATH**/ ?>