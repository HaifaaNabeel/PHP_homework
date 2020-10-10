<?PHP  $arr=array(1,2,3,4,5);
 echo (getMax($arr));
 echo ("<br>");
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
?>