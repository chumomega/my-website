<?php
    $name1 = "Chuma";

    echo "<p>This is what is in the variable name1 $name1 </p>";

    $str1 = "<p>This is how";
    $str2 = "we concatenate in PHP</p>";
// concatenation
    echo $str1." ".$str2;

    $num = 76;
// math
    $calculation = $num * 2 / 3 + 9999;

    echo "<p>This is the result of some math"." ".$calculation."</p>";

// boolean variables
    $bool = true;

    echo "<p>Is this statement true?".$bool."</p>";
//arrays
    $array1 = array("Chuma", "Chika", "Ezuku", "Afemi", "Sambia");
//add value to end of array
    $array1[] = "Ayozie";
//print array
    print_r($array1);

    echo "<br></br>";
//this serves to populate array and declare it
    $array2[0] = "blankets";
    $array2[3] = "pillows";
// similar to hashmap
    $array2["outside"] = "sleeping bag";
//remove specific value from array based on key
    unset($array2[0]);

    echo "<br></br>";

    $array3 = array("tires" => "car", "foot" => "body", "wing" => "plane");
    //if statement in php
    if($name1 == "Chuma"){
        print_r($array2);
        echo "<br></br>";
    }
    else{
        print_r($array3);
        //size of an array
        echo sizeof($array3);
        echo "<br></br>";
    }

//built in method foreach
    foreach($array1 as $key => $value){
        $array1[$key] = $value." Okoro";
        echo "The array item ".$key." is ".$value."<br>";
    }
    
echo "<br></br>";

//regular for loop array
for( $i = 0; $i<sizeof($array1); $i++){
    echo $array1[$i]."<br>";
}

echo "<br></br>";

$i = 5;
// while loops
while($i <= 41){
    echo $i. ", ";
    $i += 5;
}

echo "<br></br>";
// these are the get variables
echo "What's good ".$_GET['name']."!" ;

?>


<p>What is your name?</p>
<form>
    <input name="name" type="text">
    <input type="submit" value="Enter">
</form>