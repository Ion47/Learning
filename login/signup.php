<!DOCTYPE html>

<head>
    <title>New Account</title>
    <script src="https://cdn.tailwindcss.com"></script> <!---->
</head>

<body class="bg-blue-300 mt-80">
    <div class="flex justify-center items-center h-[500px]">
        <div class="w-[500px] border-[2px] p-[30px]  rounded-2xl">


            <form action="signup_check.php" method="post">

                <h2 class="text-center text-2xl">Sign Up</h2>

                <?php if (isset($_GET['error'])) { ?>
                    <p class="bg-red-200 text-red-700 p-3 my-1 w-[95%] rounded-md">
                        <?php echo $_GET['error']; ?>
                    </p>

                <?php } ?>

                <?php if (isset($_GET['succes'])) { ?>
                    <p class="bg-green-600 text-yellow-400 p-3 my-1 w-[95%] rounded-md">
                        <?php echo $_GET['succes']; ?>
                    </p>

                <?php } ?>

                <label class="text-lg p-3" for="">Name</label>
                <?php if (isset($_GET['name'])) { ?>
                    <input class="block border-2 border-solid p-2 m-3 w-[90%]" type="text" name="name"
                        value="<?php echo $_GET['name']; ?>" placeholder="Name"><br>
                <?php } else { ?> <input class="block border-2 border-solid p-2 m-3 w-[90%]" type="text" name="name"
                        placeholder="Name"><br>
                <?php } ?>


                <label class="text-lg p-3" for="">User Name</label>
                <?php if (isset($_GET['usname'])) { ?>
                    <input class="block border-2 border-solid p-2 m-3 w-[90%]" type="text" name="usname"
                        value="<?php echo $_GET['usname']; ?>" placeholder="User name"><br>
                <?php } else { ?> <input class="block border-2 border-solid p-2 m-3 w-[90%]" type="text" name="usname"
                        placeholder="User Name"><br>
                <?php } ?>






            

                <label class="text-lg p-3" for="">Password</label>
                <input class="block border-2 border-solid p-2 m-3 w-[90%]" type="password" name="pass"
                    placeholder="Password"><br>


                <label class="text-lg p-3" for="">RE_Password</label>
                <input class="block border-2 border-solid p-2 m-3 w-[90%]" type="password" name="repass"
                    placeholder="RE_Password"><br>


                <button class="float-right p-3 border-0 rounded-md bg-slate-900 text-white hover:opacity-70"
                    type="submit">Sign Up</button>
                <a class="float-left p-3 border-0 rounded-md bg-slate-900 text-white hover:opacity-70"
                    href="base.php">Back</a>
            </form>
        </div>

    </div>
</body>

</html>