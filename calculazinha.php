<style>
    form{
        background: blue;
        width: 180px;
        height: 90px;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }
    
    #idzin{
    	margin-bottom: 3px;
    }
    
    #button{
    	margin-top: 3px;
    }
    
</style>

<form action = "calculazinha.php" method= "GET">
    <input type= "number" name= "n1" id= "idzin"/>
    <input type= "number" name= "n2"/>
    <input type= "submit" value= "enviar" id= "button"/>
</form>

<?php
$n1 = $_GET["n1"];
$n2 = $_GET["n2"];

function calczinha($number1, $number2, $operator){
    if($operator == "+"){
        echo "$number1 + $number2 = ", $number1 + $number2;
    }
    else if($operator == "-"){
        echo "$number1 - $number2 = ", $number1 - $number2;
    }
    else if($operator == "*"){
        echo "$number1 * $number2 = ", $number1 * $number2;
    }
    else if($operator == "/"){
        echo "$number1 / $number2 = ", $number1 / $number2;
    }
    else if($operator == "**"){
        echo "$number1 ** $number2 = ", $number1 ** $number2;
    }
    else if($operator == "%"){
        echo "$number1 % $number2 = ", $number1 % $number2;
    }
    else if($operator == "all"){
        echo "$number1 + $number2 = ", $number1 + $number2, "<br>";
        echo "$number1 - $number2 = ", $number1 - $number2, "<br>";
        echo "$number1 * $number2 = ", $number1 * $number2, "<br>";
        echo "$number1 / $number2 = ", $number1 / $number2, "<br>";
        echo "$number1 ** $number2 = ", $number1 ** $number2, "<br>";
        echo "$number1 % $number2 = ", $number1 % $number2, "<br>";
    }
}

calczinha($n1, $n2, "all");

?>