<?php 
session_start();

if(isset($_SESSION['id']) && ($_SESSION['user_name'])){


?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Hello, <?php echo $_SESSION['name']; ?></h1>
</body>


<?php

}else{
    header("Location: base.php");
    exit();
}
?>