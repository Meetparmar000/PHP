<?php
echo "Welcome to php tutorial on functions <br>";

function processMarks($marksArr){
    $sum = 0;
    foreach ($marksArr as $value) {
        $sum += $value;
    }
    return $sum;
}

function avgMarks($marksArr){
    $sum = 0;
    $i = 1;
    foreach ($marksArr as $value) {
        $sum += $value;
        $i++;
    }
    return $sum/$i;
}

$rohanDas = [34, 98, 45, 12, 98, 93];
// $sumMarks = processMarks($rohanDas);
$sumMarks = avgMarks($rohanDas);

$Parmar = [40, 300, 20, 94, 89, 600];
// $sumMarksHarry = processMarks($harry);
$sumMarksParmar = avgMarks($Parmar);
echo "Total marks scored by Rohan out of 600 is $sumMarks <br>";
echo "Total marks scored by Meet out of 600 is $sumMarksParmar";

?>
