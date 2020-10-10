<?PHP 
 $num="711";
 echo sum($num);
 echo "\n";

 
function sum ($num){
    $sum = 0;
    for($i=0;$i < strlen($num);$i++){
        $sum += $num[$i];
    }
    return $sum;
}
 
 /////////////////////////////// homework q2/////////////////////
 $arr=array(1,2,3,4,5);
 echo (getMax($arr));
 echo ("\n");
 echo (getMin($arr));
  function getMax($a){
      $max=$a[0];
    for ($i=0;$i<sizeof($a);$i++){
        
        if($max <= $a[$i])
        $max=$a[$i];
        else
        $max=$max;
    }
        return $max;
    
  }

  function getMin($a){
    $max=$a[0];
  for ($i=0;$i<sizeof($a);$i++){
      
      if($max >= $a[$i])
      $max=$a[$i];
      else
      $max=$max;
  }
      return $max;
  
}
 ///////////////////////////////end homework q2/////////////////////

 ////////////////////// //////////////////////////////
 /*$arr=array(1,5,2,5,1,3,2,4,5);
echo "<br> Array <br> ( <br> ";
foreach($arr as $key=>$value){
    echo " [$key]   =>   $value <br>";
} 
echo "<br> ) <br> Udated Array  :<br> Array <be> (";
$reverseArr=array_unique($arr);
echo var_dump($reverseArr);
foreach($reverseArr as $key=>$value){
    echo " <br> [$key]   =>   $value <br>";
} 
echo "<br> ) ";
$arr1[]=$reverseArr;
print_r($arr1);
for($i=0;$i<9;$i++){
    echo " <br> [$i]   =>   $reverseArr[$i] <br>";
}
print_r($reverseArr);

echo "<br> <br> <br> ";*/
/////////////////////////////////////////////////////////////
 ////////////////////////////////// q3/////////////////////////////////

$arr=array(1,5,2,5,1,3,2,4,5);
echo "<br> Array <br> ( <br> ";
foreach($arr as $key=>$value){
    echo " [$key]   =>   $value <br>";
}
echo "<br> ) <br> <br> Udated Array  : <br> Array <br> ( <br>";
$unique = array_multi_unique($arr);
  
foreach($unique as $key=>$value){
    echo " [$key]   =>   $value <br>";
}
echo "<br> )";
function array_multi_unique($multiArray){

    $uniqueArray = array();
  
    foreach($multiArray as $subArray){
  
      if(!in_array($subArray, $uniqueArray)){
        $uniqueArray[] = $subArray;
      }
    }
    return $uniqueArray;
  }
   ////////////////////////////////// end  q3 /////////////////////////////////


?>