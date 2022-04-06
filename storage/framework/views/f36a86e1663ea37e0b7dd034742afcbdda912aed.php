<html>

<head>

<body>
    <h1>Login Page</h1>
    <form action="loginSubmit" method="post">
        <?php echo e(@csrf_field()); ?>

        <div class="row">
            Username: <input type="text" name="username" />
            <div class="error">
                <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <?php echo e($message); ?>

                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
        </div>
        <div class="row pswrd">
            Password: <input type="password" name="password" />
            <div class="error">
                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <?php echo e($message); ?>

                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
        </div>
        <div class="buttonLogin"><input type="submit" name="LogIn" value="LOGIN" /></div>
        <br />
        <div class="error">
            <?php echo e(session('errorMessage')); ?>

        </div>
    </form>
    <style>
        .error {
            color: red;
            font-size: large;
        }

        .buttonLogin {
            padding-left: 12rem;
            padding-top: 1rem;
        }

        .pswrd {
            padding-top: 1rem;
        }
    </style>

</body>
</head>

</html><?php /**PATH C:\Users\LakshitaSuthar\Desktop\LoginForm\resources\views/LoginPage.blade.php ENDPATH**/ ?>