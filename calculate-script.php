<?php

//create variables to store info 
$bill_total = filter_input(INPUT_POST, 'amount');
$tip_percentage = filter_input(INPUT_POST, 'percentage');
$submit = filter_input(INPUT_POST, 'submit'); 

//create a function to calculate the tip percentage and return 

function tipCalculate($total, $percentage){ 
    $total_tip = $total * $percentage;
    echo "<p> If your bill is $total and you'd like to tip $percentage, you should tip $total_tip</p>";
}
//if submit is set, invoke the function with the required arguments 
if(isset($submit)) {
tipCalculate($bill_total, $tip_Percentage);
}

?>