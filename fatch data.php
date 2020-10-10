<?PHP 
/*
         try{
            $conn = new PDO("mysql:host=localhost;dbname=registerdb;charset=utf8;","root","");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully <br>";
            //$m="select * from users ";
            $query="select * from users ";
            //$this->conn=query("select * from user");
            $sql = $conn->prepare($query);
            $sql->execute(array());
            $c = $sql->fetchAll(PDO::FETCH_BOTH);
            print_r($c);
echo "<br> <br> <br> <br> ";
            
            
        } 
        catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    

*/
?>

<?php
 //create connection
 $connect=mysqli_connect('localhost','root','','registerdb');
	
//check connection
 if(mysqli_connect_errno($connect))
 {
	echo 'Failed to connect to database: '.mysqli_connect_error();
}
else
	echo 'Connected Successfully!!<br>';

?>
<?php 
echo '<div class="container mt-5">
<h1>Users</h1>
<table width="500" cellpadding=5celspacing=5 border=1>
<tr>
<th>ID#</th>
<th>First Name</th>
<th>User Name</th>
<th>Password</th>
</tr>';
$result=mysqli_query($connect,"select * from users");

while($row=mysqli_fetch_array($result))
{ 
    echo "<tr><td>".$row['ID']."</td>";
    echo "<td>".$row['First Name']."</td>";
    echo "<td>".$row['Username']."</td>";
    echo "<td>".$row['Password']."</td>";
    echo"</tr>";

    //</tr></table></div>";
    //echo "<tr><td>".$row['ID']."</td>".''."<td>".$row['First Name']."</td>"."<td>".$row['Username']."</td>".''."<td>".$row['Password']."</td></tr></table></div>";
 }
 echo "</table></div>";


?>