

<?php $__env->startSection('content'); ?>
<body>
    <div class="todo-container">
        <div class="todo-header">
            <h1>مفكرة المهام</h1>
        </div>

        <?php if(session('success')): ?>
            <div class="alert alert-success">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>

        <a href="<?php echo e(route('todos.create')); ?>" class="add-todo-btn">إضافة مهمة جديدة +</a>

        <ul class="todo-list">
            <?php $__empty_1 = true; $__currentLoopData = $todos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $todo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <li class="todo-item <?php echo e($todo->completed ? 'completed' : ''); ?>">
                    <div class="task-content">
                        <form action="<?php echo e(route('todos.status', $todo->id)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>
                            <input type="checkbox" onchange="this.form.submit()" <?php echo e($todo->completed ? 'checked' : ''); ?>>
                        </form>
                        <span><?php echo e($todo->title); ?></span>
                    </div>

                    <div class="task-actions">
                        <a href="<?php echo e(route('todos.edit', $todo->id)); ?>" title="تعديل">
                            <svg fill="#4a5568" viewBox="0 0 20 20"><path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path><path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path></svg>
                        </a>
                        <form action="<?php echo e(route('todos.destroy', $todo->id)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" onclick="return confirm('هل أنت متأكد من حذف هذه المهمة؟')" title="حذف">
                                <svg fill="#e57373" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm4 0a1 1 0 012 0v6a1 1 0 11-2 0V8z" clip-rule="evenodd"></path></svg>
                            </button>
                        </form>
                    </div>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <p style="text-align:center;">لا توجد مهام حالياً. هيا بنا نبدأ!</p>
            <?php endif; ?>
        </ul>
    </div>
</body>
</html>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\test\todo-app\resources\views/todos/index.blade.php ENDPATH**/ ?>