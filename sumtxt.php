<?PHP 
 $num="711";
 
 echo '<div class="container mt-5">'.sum($num);
 echo "<br> </div.";

 
function sum ($num){
    $sum = 0;
    for($i=0;$i < strlen($num);$i++){
        $sum += $num[$i];
    }
    return $sum;
}