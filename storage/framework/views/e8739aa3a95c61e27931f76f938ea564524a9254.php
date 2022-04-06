<html>

<head>

<body>
    <h1>Edit the below values</h1>
    <form action="<?php echo e(route('userdetail.update',[$user->id])); ?>" method="post">
        <?php echo e(@csrf_field()); ?>

        <div class="row">
            Name: <input type="text" name="name" required value="<?php echo e($user->name); ?>" />

        </div>
        <div class="row">
            Email: <input type="email" name="email" required value="<?php echo e($user->email); ?>" />

        </div>
        <div class="row">

            <a href="userData">Back to Previous Page</a>
            <input type="submit" name="save" value="Save" />
        </div>
        <br />

    </form>
    <style>

    </style>

</body>
</head>

</html><?php /**PATH C:\Users\LakshitaSuthar\Desktop\LoginForm\resources\views/editUser.blade.php ENDPATH**/ ?>