<html>

<head>

<body>
    <h1>Create a new user</h1>
    <form action="addUser" method="post">
        <?php echo e(@csrf_field()); ?>

        <div class="row">
            Name: <input type="text" name="name" required />

        </div>
        <div class="row emailfield">
            Email: <input type="email" name="email" required />

        </div>
        <div class="row">

            <a href="userData">Back to Previous Page</a>
            <input type="submit" name="add" value="Add" class="addbtn" />
        </div>
        <br />

    </form>
    <style>
        .emailfield {
            padding-top: 1rem;
            padding-bottom: 1rem;
        }

        .addbtn {
            margin-left: 2.5rem;
        }
    </style>

</body>
</head>

</html><?php /**PATH C:\Users\LakshitaSuthar\Desktop\LoginForm\resources\views/createUser.blade.php ENDPATH**/ ?>