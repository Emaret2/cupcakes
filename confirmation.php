<?php
// adding the cupcakes array
require("cupcakes.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Thank you</title>
</head>
<body>
<?php

    // check for errors
    $invalid = false;

    if(isset($_POST['name'])){
        $name = $_POST['name'];
    } else {
        $err_noName = true;
        $invalid = true;
    }

    if(isset($_POST['cupcakes'])){
        $cupcakes = $_POST['cupcakes'];
        foreach($cupcakes as $key => $value){

            if(!array_key_exists($value, $masterCupcakes)){
                $err_wrongCupcake = true;
                $invalid = true;
            }
        }
    } else {
        $err_noCupcake = true;
        $invalid = true;
    }


    if($invalid){
        echo "<h3> An error was found when submitting the form. Please check and resubmit </h3>";
        if(isset($err_noName)){
            echo "<p> No Name Specified. </p>";
        }
        if(isset($err_noCupcake)){
            echo "<p> No Cupcakes were ordered. </p>";
        }
        if(isset($err_wrongCupcake)){
            echo "<p> Please do not change the value of my cupcakes. </p>";
        }
    } else {
        $price = 0;
        echo "<p> Thank you, $name, for your order! </p>";
        echo "<p> Order Summary:</p>";
        echo "<ul>";
        foreach($cupcakes as $key => $value){
            echo "<li> $masterCupcakes[$value] </li>";
            $price += 3.5;
        }
        echo "</ul>";
        echo "<br>";
        $price = number_format($price, 2, '.', '');
        echo "<p> Order Total: $$price";
    }

?>
</body>
</html>

