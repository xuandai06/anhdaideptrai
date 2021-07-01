<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>

    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
</head>
<body class="bg-gray-200">
  <nav class="p-6 bg-white flex justify-between mb-6">
        <ul class="flex">
            <li class="p-3">
                <a href="<?php echo e(route('home')); ?>">Home</a>
            </li>
            <li class="p-3">
                <a href="<?php echo e(route('dashboard')); ?>">Dashboard</a>
            </li>
            <li class="p-3">
                <a href="<?php echo e(route('posts')); ?>">Posts</a>
            </li>
        </ul>

        <ul class="flex">
        <?php if(auth()->user()): ?>
            <li class="p-3">
                <a href=""><?php echo e(auth()->user()->name); ?></a>
            </li>
            <li class="p-3">
                <a href="<?php echo e(route('logout')); ?>">Log out</a>
            </li>
        <?php else: ?>
            <li class="p-3">
                <a href="<?php echo e(route('login')); ?>">Log in</a>
            </li>
            <li class="p-3">
                <a href="<?php echo e(route('register')); ?>">Register</a>
            </li>
        <?php endif; ?>
        </ul>
  </nav>
    <?php echo $__env->yieldContent('content'); ?>
</body>
</html><?php /**PATH E:\ungDung\laragon\www\post1\resources\views/layouts/app.blade.php ENDPATH**/ ?>