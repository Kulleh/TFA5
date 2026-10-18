<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Accounts</title>
</head>
<body>

    <nav>
        <a href="<?php echo e(route('home')); ?>">Home</a> |
        <a href="<?php echo e(route('about')); ?>">About</a> |
        <a href="<?php echo e(route('customers')); ?>">Customer Accounts</a> |
        <a href="<?php echo e(route('users')); ?>">User Accounts</a>
    </nav>

    <h1>User Accounts</h1>

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Role</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($user['id']); ?></td>
                    <td><?php echo e($user['full_name']); ?></td>
                    <td><?php echo e($user['email']); ?></td>
                    <td><?php echo e($user['role']); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

</body>
</html><?php /**PATH C:\Users\Rowgene Gales\Documents\WebSys_Laravel\TFA5\resources\views/user.blade.php ENDPATH**/ ?>