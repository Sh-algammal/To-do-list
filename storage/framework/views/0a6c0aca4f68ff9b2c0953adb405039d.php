

<?php $__env->startSection('content'); ?>
    <div class="todo-container">
        <div class="todo-header">
            <h1>مهمة جديدة</h1>
        </div>

        <form action="<?php echo e(route('todos.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <input type="text" name="title" placeholder="اكتب عنوان المهمة هنا..." value="<?php echo e(old('title')); ?>" required autofocus>
            <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="error-message"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            <button type="submit">حفظ المهمة</button>
        </form>

        <a href="<?php echo e(route('todos.index')); ?>" class="back-link">العودة إلى القائمة</a>
    </div>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\test\todo-app\resources\views/todos/create.blade.php ENDPATH**/ ?>