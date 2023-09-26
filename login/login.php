<?php
session_start();

include "db_con.php";

if(isset($_POST['usname']) && isset($_POST['pass'])){

    function validate($data){
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }


    $usname = validate($_POST['usname']);
    $pass = validate($_POST['pass']);

    if(empty($usname)){
        header("Location: base.php?error=User Name is required");
        exit();


    }else if(empty($pass)){
        header("Location: base.php?error=Password is required");
        exit();


    } else{
        $pass = md5($pass);

        $sql = "SELECT * FROM users WHERE user_name='$usname' AND password='$pass'";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) === 1){
            $row = mysqli_fetch_assoc($result);

            if($row['user_name'] === $usname && $row['password']=== $pass){
                $_SESSION['user_name'] = $row['user_name'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['id'] = $row['id'];

                header("Location: home.php?");
                exit();

            }else{
                header("Location: base.php?error=Username does not exist or wrong password");
                exit();
            }
        }else{
            header("Location: base.php?error=Username does not exist or wrong password");
            exit();
        }
    }

}else{
    header("Location: base.php");
    exit();
}

?>