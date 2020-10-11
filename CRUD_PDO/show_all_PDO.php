<?PHP 

$host="localhost";
$dbname="registerdb";
$username="root";
$password="";

try{
            $conn = new PDO("mysql:host=".$host.";dbname=".$dbname,$username,$password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully ^_^ <br>";
 } 
    catch(PDOException $e) 
    {
            echo "Connection failed: " . $e->getMessage();
    }
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title> CRUD PDO </title>
  </head>
  <body>
      <br><br><br>
 

      <div class="container" style="width=40%">
     <h2>Show all data from Database </h2>
     <?php
     try{ 
        $query="SELECT * FROM register ";
        $stmnt=$conn->prepare($query);
        $stmnt->execute(); 
        $data=$stmnt->fetchAll();
        echo '<div>
           <h1>Register</h1>
           <table width="500" cellpadding=5celspacing=5 border=1>
           <tr>
            <th>ID</th>
            <th>User Name</th>
            <th>Emai </th>
            <th>Password</th>
         </tr>';
          foreach ($data as $row)
          {
            echo "<tr><td>".$row['id']."</td>";
            echo "<td>".$row['user_name']."</td>";
            echo "<td>".$row['email_id']."</td>";
            echo "<td>".$row['password']."</td>";
            echo"</tr>";
          }
        echo "</table></div><br> <br> </div>";


    }
    catch(PDOException $e) 
    {
            echo "Connection failed: " . $e->getMessage();
    }

/////////////////////////////////////end show all date from database ///////////////////////////

?>


        <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>