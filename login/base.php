<!DOCTYPE html>
<head>
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>     <!---->
</head>

<body class="bg-blue-300">
    <div class="flex justify-center items-center h-[500px]">
    <div class="w-[500px] border-[2px] p-[30px]  rounded-2xl">


    <form action="login.php" method="post">

        <h2 class="text-center text-2xl">Login</h2>

        <?php if(isset($_GET['error'])){    ?>

            <p class="bg-red-200 text-red-700 p-3 my-1 w-[95%] rounded-md"><?php echo $_GET['error']; ?></p>

           <?php } ?>

        <label class="text-lg p-3" for="">User Name</label>
        <input class="block border-2 border-solid p-2 m-3 w-[90%]" type="text" name="usname" placeholder="User Name"><br>

        <label class="text-lg p-3" for="">Password</label>
        <input class="block border-2 border-solid p-2 m-3 w-[90%]" type="password" name="pass" placeholder="Password"><br>

        <button class="float-right p-3 border-0 rounded-md bg-slate-900 text-white hover:opacity-70" type="submit">Login</button>
    <a class="float-left p-3 border-0 rounded-md bg-slate-900 text-white hover:opacity-70" href="signup.php">New account</a>
    </form>
    </div>

</div>
</body>
</html>