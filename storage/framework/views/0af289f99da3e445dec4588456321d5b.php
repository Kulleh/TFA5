<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Customer Accounts</title>
</head>
<body>

    <nav>
        <a href="<?php echo e(route('home')); ?>">Home</a> |
        <a href="<?php echo e(route('about')); ?>">About</a> |
        <a href="<?php echo e(route('customers')); ?>">Customer Accounts</a> |
        <a href="<?php echo e(route('users')); ?>">User Accounts</a>
    </nav>

    <h1>Customer Accounts</h1>

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($customer['id']); ?></td>
                    <td><?php echo e($customer['full_name']); ?></td>
                    <td><?php echo e($customer['email']); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

</body>
</html><?php /**PATH C:\Users\Rowgene Gales\Documents\WebSys_Laravel\TFA5\resources\views/customer.blade.php ENDPATH**/ ?>