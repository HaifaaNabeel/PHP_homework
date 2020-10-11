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
     <h2>Search Data from DataBase </h2>
  <form action="" class="was-validated" method="POST">
  <div class="form-group">
    <label for="user_name">user_name:</label>
    <input type="text" class="form-control" id="user_name" placeholder="Enter user_name" name="user_name" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

<?PHP

if(isset($_POST['user_name'])){
    try{ 
        $query="SELECT * FROM register WHERE user_name=:user_name";
        $stmnt=$conn->prepare($query);

        $stmnt->bindparam(':user_name',$_POST['user_name']);

        $stmnt->execute(); 
        $data=$stmnt->fetch();

        //print_r($data);
        print "Username : ".$data['user_name']."<br> Email : ".$data['email_id'];

    }
    catch(PDOException $e) 
    {
            echo "Connection failed: " . $e->getMessage();
    }
}
/////////////////////////////////////end search date by form ///////////////////////////

?>


        <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>