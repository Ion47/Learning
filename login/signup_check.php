<?php
session_start();

include "db_con.php";

if(isset($_POST['usname']) && isset($_POST['pass']) && isset($_POST['name']) && isset($_POST['repass'])){

    function validate($data){
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }


    $usname = validate($_POST['usname']);
    $pass = validate($_POST['pass']);

    $name = validate($_POST['name']);
    $repass = validate($_POST['repass']);

    $user_data = 'usname=' . $usname. "&name=" . $name;

    echo $user_data;


    if(empty($usname)){
        header("Location: signup.php?error=User Name is required&$user_data");
        exit();


    }else if(empty($pass)){
        header("Location: signup.php?error=Password is required&$user_data");
        exit();

    } else if(empty($repass)){
        header("Location: signup.php?error=RE_Password is required");
        exit();

    } else if(empty($name)){
        header("Location: signup.php?error=Name is required&$user_data");
        exit();

    } else if($pass!== $repass){
        header("Location: signup.php?error=Password does not match&$user_data");
        exit();

    }
    
    else{

        $pass = md5($pass);
        $sql = "SELECT * FROM users WHERE user_name='$usname'";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0){
            header("Location: signup.php?error=The username is taken try another&$user_data");
            exit();

        }else{
            $sql2="INSERT INTO users(user_name, password, name) VALUES('$usname','$pass','$name')";
            $result2 = mysqli_query($conn, $sql2);
            if($result2){
                header("Location: signup.php?succes=Account has been created");
            exit();
            }else{
                header("Location: signup.php?error=Unknow error&$user_data");
            exit();
            }
        }
        
    }

}else{
    header("Location: signup.php");
    exit();
}

?>