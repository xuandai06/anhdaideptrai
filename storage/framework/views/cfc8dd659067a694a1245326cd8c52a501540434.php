

<?php $__env->startSection('content'); ?>
<div class="flex justify-center">
    <div class="w-1/3 bg-white p-6 rounded-lg">

           
            <form action="<?php echo e(route('login')); ?>" method="post">
            
            <?php echo csrf_field(); ?>
           
            <input type="text" name="email" id="email" placeholder="your email"
            class="bg-gray-100 w-full p-4 mb-2 border-2 rounded-lg" value="<?php echo e(old('email')); ?>">
            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="text-red-500"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

            <input type="password" name="password" id="password" placeholder="your password"
            class="bg-gray-100 w-full p-4 mb-2 border-2 rounded-lg">

            <div>
                <input type="checkbox" name="remember" id="remember" class="mr-2">
                <label for="remember">Remember me</label>
            </div>
            
        
            <button type="submit" class="bg-blue-500 w-full p-4 text-white">Log in</button>
            </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\ungDung\laragon\www\post1\resources\views/Auth/login.blade.php ENDPATH**/ ?>