<?php

if($_POST){
    $nameArr = array("Chuma", "Chika", "Ezuku", "Afemi", "Sambia");

    $known = false;
    foreach($nameArr as $name){
        if($name == $_POST["name"]){
            $known = true;
        }
    }

    if($known){
        echo "<p>Hello ".$_POST["name"]."!</p>";
    } 
    else{
        echo "<p>Sorry, Who are you? We've never met.</p>";
    }

}




?>
<p>What is your name?</p>
<form method = "POST">
    <input name="name" type="text" placeholder="Name">
    <input type="submit" value="Enter">
</form>