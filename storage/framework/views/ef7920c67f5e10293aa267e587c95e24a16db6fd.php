<html>

<head>

<body>
    <div>
        <span>Details Of All The Users </span>
        <a href="logout" class="logout">Logout</a>
    </div>
    </h1>
    <div>
        <?php echo e(session('message')); ?>

        <table class="userdata">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
            <tr>
                <?php $__currentLoopData = $userArray; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($user->id); ?></td>
                <td><?php echo e($user->name); ?></td>
                <td><?php echo e($user->email); ?></td>
                <td><a href="deleteUser/<?php echo e($user->id); ?>">Delete</a>
                    <a href="editUser/<?php echo e($user->id); ?>">Edit</a>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tr>
        </table>
        <div class="newuser">
            <a href="userCreate">Create a new user</a>
        </div>
    </div>

    <style>
        .userdata {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 50%;
        }

        .userdata td,
        .userdata th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        .userdata tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .userdata tr:hover {
            background-color: #ddd;
        }

        .userdata th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
        }

        .newuser {
            padding-top: 1rem;
            font-size: x-large;
        }

        span {
            font-size: 2em;
            margin-block-start: 0.67em;
            margin-block-end: 0.67em;
            margin-inline-start: 0px;
            margin-inline-end: 0px;
            font-weight: bold;
        }

        .logout {
            font-size: x-large;
            margin-left: 27rem;
        }
    </style>
</body>
</head>

</html><?php /**PATH C:\Users\LakshitaSuthar\Desktop\LoginForm\resources\views/UserData.blade.php ENDPATH**/ ?>