<?php
    echo "<h3>Hello. Welcome to the prime number determiner</h3>";
    if(is_numeric($_GET["number"]) && $_GET["number"] > 0 && $_GET["number"] == round($_GET["number"], 0)){
        $i=2;
        $prime=true;
        while($i<$_GET["number"]){
            if($_GET['number'] % $i == 0){
                $prime=false;
            }
            $i++;
        }

        if($prime){
            echo "<p>The number ".$_GET['number']." is prime!</p>" ;
        }
        else{
            echo "<p>The number ".$_GET['number']." is not prime!</p>" ;
        }
    }
    else if($_GET){

        echo "<p>Please enter a positive whole number. The value ".$_GET["number"]." is not valid.";
    }
?>

<p>Enter a number</p>
<form>
    <input name="number" type="text">
    <input type="submit" value="Enter">
</form>