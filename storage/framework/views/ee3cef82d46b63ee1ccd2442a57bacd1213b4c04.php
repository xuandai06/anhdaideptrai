

<?php $__env->startSection('content'); ?>
<div class="flex justify-center">
    <div class="w-8/12">
        <div class="w-8/12 mb-5">
            <p><?php echo e($user->name); ?> has <?php echo e($posts->count()); ?> <?php echo e(Str::plural('post',$posts->count())); ?></p>
        </div>

        <div class="bg-white border-2 rounded-lg">
            <?php if($posts->count()): ?>
            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="mb-4">
                <a href="<?php echo e(route('user.posts',$post->user)); ?>" class="font-bold"><?php echo e($post->user->name); ?></a>
                <span class="text-gray-600 text-sm"><?php echo e($post->created_at->diffForHumans()); ?></span>
                <p class="mb-2"><?php echo e($post->body); ?></p>
            </div>

            <?php if(auth()->guard()->check()): ?>
            <div class="flex items-center">
                <?php if(!$post->likedBy(auth()->user())): ?>
                <form action="<?php echo e(route('posts.likes', $post)); ?>" method="post" class="mr-2">
                    <?php echo csrf_field(); ?>
                    <button type="submit" class="text-blue-500">Like</button>
                </form>
                <?php else: ?>
                <form action="<?php echo e(route('posts.likes', $post)); ?>" method="post" class="mr-2">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('delete'); ?>
                    <button type="submit" class="text-blue-500">Unlike</button>
                </form>
                <?php endif; ?>
                <span><?php echo e($post->likes->count()); ?> <?php echo e(Str::plural('like', $post->likes->count())); ?>

                </span>
            </div>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete', $post)): ?>
            <form action="<?php echo e(route('posts.destroy', $post)); ?>" method="post">
                <?php echo csrf_field(); ?>
                <?php echo method_field('delete'); ?>
                <button type="submit" class="text-blue-500">Delete</button>
            </form>
            <?php endif; ?>

            <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <?php echo e($posts->links()); ?>

            <?php else: ?>
            <p>There are no posts</p>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\ungDung\laragon\www\post1\resources\views/users/posts/index.blade.php ENDPATH**/ ?>