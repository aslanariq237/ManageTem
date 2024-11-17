<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/dashboard.css">
    <title>Dashboard Pages</title>
</head>
<body>
    <div class="container">
        <h1>Management System</h1>
        <div class="content1">
            <div class="sidebar">
                <?php echo $__env->make('container.sidebar.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>           
            </div>
            <div class="cont">
                <?php echo $__env->yieldContent('content'); ?>
            </div>
        </div>
    </div>
</body>
</html><?php /**PATH D:\project\laravel\management\ManagementSystem\resources\views/container/dashboard.blade.php ENDPATH**/ ?>