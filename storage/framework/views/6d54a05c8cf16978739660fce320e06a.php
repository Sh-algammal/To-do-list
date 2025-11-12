

<?php $__env->startSection('content'); ?>
<body>
    <div class="todo-container">
        <div class="todo-header">
            <h1>تعديل المهمة</h1>
        </div>

        <form action="<?php echo e(route('todos.update', $todo->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <input type="text" name="title" value="<?php echo e(old('title', $todo->title)); ?>" required>
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
            <button type="submit">تحديث المهمة</button>
        </form>

        <a href="<?php echo e(route('todos.index')); ?>" class="back-link">العودة إلى القائمة</a>
    </div>
</body>
</html>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\test\todo-app\resources\views/todos/edit.blade.php ENDPATH**/ ?>