<?PHP 
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
?>