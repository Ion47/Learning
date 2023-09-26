<?php 

    echo "Helloooo";
    //  and # this is comment
    /* multi 
            line */

               //echo is output

    //variabila se noteaza cu $
    $txt ="hello world" ;       //global scope only be accessed outside a function
    $x = 5;
    $y =10.5;

    echo "Your next line is $txt!";
    echo "Your next line is" . $txt . "!"; //same ca sus
    echo $x + $y;           //x + y


    $z = 5;
    function myTest() {
        $z = 10;
         // using x inside this function will generate an error and you need to put inside
        echo "<p> Variable x inside function is $z+$z </p>";
    }
    myTest();

    echo "<p>Variable x outside function is: $x</p>";


    $a =5;
    $b =7;

    function myTest2() {
        global $a, $b, $c;
        $c = $a+$b;
    }

    myTest2();
    echo $c;

    echo "<br>";
    echo "<br>";
    echo "<br>";


    function stati(){
        static $x =0;
        echo $x;
        $x++;
    }

    stati(); //call function
    echo "<br>";
    stati();
    echo "<br>";
    stati();

    /*echo no return value 
        print has return value 1*/

    $car = array("dacia","logan","civic");   //array
    
    echo "<br>";echo "<br>";echo "<br>";

    echo strlen("Hello world! 16!");
    echo str_word_count("Hello world!");
    echo strrev("Hello world reverse!");
    echo strpos("Hello world", "world"); //function searches for a specific text within a string. show char position
    echo str_replace("world","Dolly","Hello world!"); //replace x with y

    echo(min(0, 150, 30, 20, -8, -200));  // returns -200
    echo(max(0, 150, 30, 20, -8, -200));  // returns 150

    echo(abs(-6.7));  // returns 6.7

    /*
    while - loops through a block of code as long as the specified condition is true
    do...while - loops through a block of code once, and then repeats the loop as long as the specified condition is true
    for - loops through a block of code a specified number of times
    foreach - loops through a block of code for each element in an array
 */

    //const cannot be changed
    define("Greeting", "Welcome weeeeee" );
    echo Greeting;

    $very_bad_unclear_name = "15 chicken wings";

    $order =& $very_bad_unclear_name;   //reference si se schimba o data cu vbun

    $order .= $very_bad_unclear_name;   //ref doar o data pana se schimba
    echo "\nYour order is: $very_bad_unclear_name.";



    echo "<h3>Hello, ${about_me['name']}</h3>"    //cauta in variabila about_me 'data' despre nume

    #------------------------------------------------------------------------

    /*
    <html>
	<body>
		<form method="post" action="">      form handling
			Your name:
			<br>
  		<input type="text" name="name">
 			<br><br>
  		What is the best thing about learning to code:
  		<br>
  		<input type="text" name="best">
  		<br><br> 
  		<input type="submit" value="Submit Answers">
		</form>


    <div id="form-output">   form output care afiseaza ceea ce s-a scris
    <p id="name">Hello, <?=$_POST["name"]?></p>     cauta si afiseaza id-ul name
    <p id="best">Best, <?=$_POST["best"]?></p>      //
    </div>


		<a href="index.php">Reset</a>
	</body>
    </html>
    */


    
//    function checkWord($input, $letter)
//    {        //functie de verificare a textului si generare erori daca util nu a inceput textul cu litera corecta
//     if($_SERVER["REQUEST_METHOD"] === "POST" && strtolower($input[0]) !== $letter){
//       return "* This word must start with the letter ${letter}!";}
//       else{
//         return "";
//       }
//     }
/*
    // <input type="text" name="a-word" id="a-word" value="<?= $_POST["a-word"];?>">
    // <br>      
    //   <p class="error" id="a-error"><?=checkWord($_POST["a-word"], "a")?></p>
    // <br>     */


   /// htmlspecialchars();  //transforms HTML elements into HTML entities  href=\"https:  to  a href=&quot;https:
    
      //  filter_var(); // ia o variabila si o duce printr-un "filtru" care produce rez dorit



//         function hello(){       //creeare
//             echo"hello";
//         }

//         hello(); //apelare


//      function convertToQuestion(&$str)      //reference
//     {
//   $str = "Do you think " . $str . "?\n";
//     }


//     echo "Today is " . date("Y/m/d") . "<br>"; //data 
//     echo "The time is " . date("h:i:sa"); //timp ca trece



    
//     require 'filename'; // require will produce a fatal error (E_COMPILE_ERROR) and stop the script
//    include 'filename'; // include will only produce a warning (E_WARNING) and the script will continue   
//    echo readfile("filename.txt");   //output la continutul fisierului filename


//    $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");  //variab cu text onlyread pentru a nu modifica, what do you mean or die?
//         fclose() //pentru a inchide fis deja deschis
//         fgets() // o singura linie din file

//         fopen() //este si folosit pentru a crea o fila
//         $myfile = fopen("testfile.txt", "w")  // creeaza text in mod only write

//         fwrite() //function is used to write to a file.


    
//         setcookie()// salveaza detalii despre utilizator?
//         setcookie("user", "", time() - 3600); //sterge coockieul dupa o ora


//         session_start() //sesiunea memoreaza informatiile despre un utilizator si este avalb in toate paginile aplicatiei

//         filter_list() //verifica si filtreaza inf
//         filter_var()


//         //JSON  JavaScript Object Notation pt javascript

//         throw //permite unei functii sau metode def de utilizator sa arunce o exceptie, cand se arunca codul de dupa nu va mai fi executat

//    ?>      
