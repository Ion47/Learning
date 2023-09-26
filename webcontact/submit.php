<?php

$lname = $fname = $email = $reason = $comment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $lname = submit($_POST["lname"]);
    $fname = submit($_POST["fname"]);
    $email = submit($_POST["email"]);
    $reason = submit($_POST["reason"]);
    $comment = submit($_POST["comment"]);
}

function submit($data)
{
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$fp = fopen("comentarii.txt", "w");
fwrite($fp, $lname . " ");
fwrite($fp, $fname . " ");
fwrite($fp, $reason . " ");
fwrite($fp, $comment . " \n");
fclose($fp);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="php" href="submit.php" />


    <?php

    ?>


</head>

<body class="mx-auto w-1/2 mt-8">
    <div class=" bg-orange-300 my-4">
        <h1 class="text-center text-3xl">Conctact Us</h1>
        <p class="text-red-800 ml-10">* Required</p>
    </div>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

        <div class=" bg-orange-300 my-4 p-3">
            <p class="text-red-800 ml-10">Name: *</p>
            <div class="flex justify-center gap-5 mx-auto">
                <input class="w-[300px]" name="lname" value="<?php echo $lname; ?>" type="text" placeholder="Nume"
                    required="">
                <input class="w-[300px]" name="fname" value="<?php echo $fname; ?>" type="text" placeholder="Prenume">
            </div>
        </div>

        <div class=" bg-orange-300 my-4 p-3">
            <p class="text-red-800 ml-10">Email: *</p>
            <input class="flex justify-center gap-5 mx-auto w-[400px]" type="text" value="" name="email"
                placeholder="something@mail.com" required="">
        </div>

        <div class=" bg-orange-300 my-4 p-3">
            <p class="text-red-800 ml-10">Reason of contact: *</p>

            <input type="radio" name="reason" value="query">
            <label for="query">Query</label>
            <br>
            <input type="radio" name="reason" value="feedback">
            <label for="feedback">Feedback</label>
            <br>
            <input type="radio" name="reason" value="complaint">
            <label for="complaint">Complaint</label>
            <br>
            <input type="radio" name="reason" value="other">
            <label for="other">Other</label>
            <br>

        </div>
        <div class=" bg-orange-300 my-4 p-3">
            <p class="text-red-800 ml-10">Comment: *</p>
            <textarea class="flex justify-center mx-auto" name="comment" id="comment" maxlength="250" required=""
                cols="60" rows="5" placeholder="Comenteaza"></textarea>
        </div>

        <input type="submit" name="submit" value="Submit" class="flex justify-center mx-auto">
    </form>

    <?php
    echo "<h2>Detaliile tale trimise: <h2>";
    echo $lname . " " . $fname;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $reason;
    echo "<br>";
    echo $comment;
    ?>
    <br>
    <br>
    <br>

    <?php

    if (!file_exists("detalii.txt")) {
        echo "Nu exista fisierul.";
    }

    $file = fopen("detalii.txt", "r");

    if (!$file) {
        echo "Fisierul nu se deschide.";
    }

    $count = 0;
    $cols = 4;
    echo '<table>'; //open table
    
    echo '<tr><th class="w-[150px]">Last Name</th><th class="w-[150px]">First Name</th><th class="w-[250px]">Email</th><th class="w-[150px]">Phone Number</th></tr>';

    echo '<tr>';
    while (!feof($file)) {
        if ($count < $cols) {
            $info = fgets($file);
            echo "<td class='text-center'>$info</td>";
            $count++;
        } else {
            $count = 0;
            echo '</tr><tr>';
        }
    }
    echo "</tr></table>";
    fclose($file);
    
 echo "<br><br>";

    function array_sort($arr){
        for($x=0;$x<count($arr);$x++){
            $min=$x;
            for($y=$x+1;$y<count($arr);$y++){
                if($arr[$y]<$arr[$x]){
                    $temp = $arr[$min];
                    $arr[$min] = $arr[$y];
                    $arr[$y]=$temp;
                }
            }
        }
        return $arr;
    }


    $arr = array(13,6,8,32,79,8);

    print_r(array_sort($arr));


    echo "<br><br>";

    abstract class Shape {
        abstract public function calculateArea();
    }
    
    class Triangle extends Shape {
        private $base;
        private $height;
    
        public function __construct($base, $height) {
            $this->base = $base;
            $this->height = $height;
        }
    
        public function calculateArea() {
            return 0.5 * $this->base * $this->height;
        }
    }
    
    class Rectangle extends Shape {
        private $length;
        private $width;
    
        public function __construct($length, $width) {
            $this->length = $length;
            $this->width = $width;
        }
    
        public function calculateArea() {
            return $this->length * $this->width;
        }
    }
    
    $triangle = new Triangle(8, 12);
    echo "Triunghi: " . $triangle->calculateArea() . "</br>";
    
    $rectangle = new Rectangle(9, 6);
    echo "Dreptunghi: " . $rectangle->calculateArea() . "</br>";
    
    ?>
</body>

</html>