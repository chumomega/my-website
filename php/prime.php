<?php
    echo "Hello. Welcome to the prime number determiner";
    if($_GET['number'] % 3 == 5){
        echo " ";
    }



    echo "The number ".$_GET['number']."is not prime!" ;

?>

<p>Enter a number</p>
<form>
    <input name="number" type="text">
    <input type="submit" value="Enter">
</form>