<!DOCTYPE html>
<html>

<head>
    <title>Genre List</title>
</head>

<body>
    <h1>Genre List</h1>
    <ul>
        <?php $__currentLoopData = $genres; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $genre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><?php echo e($genre['id']); ?> - <?php echo e($genre['name']); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</body>

</html><?php /**PATH C:\xampp\htdocs\Othman_Hanif_pert1\resources\views/genre.blade.php ENDPATH**/ ?>