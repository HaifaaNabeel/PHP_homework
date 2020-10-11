<?PHP 
 /*echo"<script>
 document.write('<h1> Hello World </h1> <br> Welcome ^_^ <br>')
  </script> ";*/
?>



<script>
 
  //document.write('<h3> without tag php </h3> <br> <h1> Hello World </h1>  <br> Welcome ^_^ <br>')
  
</script>






<?php 
    echo "<div id='IT'></div>"; 
?> 
<script >

var funcVar = '<h3> By using id  </h3> <br> <h1> Hello World </h1>  <br> Welcome ^_^ <br>' ;   
document.getElementById("IT").innerHTML = funcVar; 

</script>