<!DOCTYPE html>
<html>

<head>
    <title>Author List</title>
</head>

<body>
    <h1>Author List</h1>
    <ul>
        <?php $__currentLoopData = $authors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $author): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><?php echo e($author['id']); ?> - <?php echo e($author['name']); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</body>

</html><?php /**PATH C:\xampp\htdocs\Othman_Hanif_pert1\resources\views/author.blade.php ENDPATH**/ ?>