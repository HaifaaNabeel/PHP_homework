<!doctype html>
 <html lang="en">
   <head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
 
     <title> Superglobal var  </title>
   </head>
   <body>
   <br>

   <div class="container" style="width=50%">

<?php
/*$GLOBALS : It is a superglobal variable which is used to access 
global variables from anywhere in the PHP script. */

$var1 = 250; 
$var2 = 300; 
  
function sumFun(){ 
    $GLOBALS['sum'] = $GLOBALS['var1'] + $GLOBALS['var2']; 
} 
sumFun(); 
echo $sum."<br><br>"; 
/* PHP stores all the global variables in array $GLOBALS[]
 where index holds the global variable name, which can be accessed. */
 ///////////////////////////////////////////////////////////////////////////

 /* $_SERVER : It is a PHP super global variable that stores the 
 information about headers, paths and script locations. 
 Some of these elements are used to get the information from
  the superglobal variable $_SERVER. */

echo $_SERVER['PHP_SELF']; 
print "<br>"; 
echo $_SERVER['SERVER_NAME']; 
print "<br>"; 
echo $_SERVER['HTTP_HOST']; 
print "<br>"; 
echo $_SERVER['HTTP_USER_AGENT']; 
print "<br>"; 
echo $_SERVER['SCRIPT_NAME']; 
print "<br>"

 ///////////////////////////////////////////////////////////////////////////

 /* $_REQUEST : It is a superglobal variable which is used to collect
  the data after submitting a HTML form. $_REQUEST is not used mostly,
  because $_POST and $_GET perform the same task and are widely used.
  */
?>


   <div class="container" style="width=40%">
   <h1>The $_REQUEST </h1>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>"> 
 Your Name : <br>
  <input type="text" name="user_name"> <br><br>
 <button type="submit">SUBMIT</button> 
</form> 
</div>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $user_name = htmlspecialchars($_REQUEST['user_name']); 
    if(empty($user_name)){ 
        echo "Your is empty"; 
    } else { 
        echo " Your name is ".$user_name; 
    } 
} 
?> 

<!--
/////////////////////////////////////////////////////////////////////////////////


$_GET : $_GET is a super global variable used to collect data from 
the HTML form after submitting it. 
When form uses method get to transfer data, the data is visible
 in the query string, therefore the values are not hidden.
 $_GET super global array variable stores the values that come in the URL.

*/-->
<div class="container" style="width=40%">
<h1>The $_GET</h1>
<form method="get" action="<?php echo $_SERVER['PHP_SELF'];?>"> 
 <label for="nameGet">Please enter your name: </label><br> 
 <input name="nameGet" type="text"><br> 
 <label for="email">Please enter your email: </label> <br>
 <input name="email" type="text"><br> <br>
 <input type="submit" value="Submit"> <br>
</form> 
</div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") { 
    if(!empty($_GET["nameGet"])){ 

$name=$_GET['nameGet']; 
$email=$_GET['email']; 
echo "<strong> Your Name is : ".$name."<br> And your Email is : $email .</strong>"; 
echo "<h2> your information appear in url you can see it after submit by The ' GET '<BR> <BR> </h2>"
    ;}
}
?> 

<!--
/////////////////////////////////////////////////////////////////////////////////


/*$_POST : It is a super global variable used to collect data from
 the HTML form after submitting it. When form uses method post to 
 transfer data, the data is not visible in the query string,
 because of which security levels are maintained in this method.

*/-->
<div class="container" style="width=40%">
<h1>The $_POST</h1>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>"> 
 <label for="namePost">Please enter your name: </label><br> 
 <input name="namePost" type="text"><br> 
 <label for="email">Please enter your email: </label> <br>
 <input name="email" type="text"><br> <br>
 <input type="submit" value="Submit"> <br>
</form> 
</div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    if(!empty($_POST["namePost"])){ 

$name=$_POST['namePost']; 
$email=$_POST['email']; 
echo "<strong> Your Name is : ".$name."<br> And your Email is : $email .</strong> <br> <br>"; 
    }
}
?> 
<!--
/////////////////////////////////////////////////////////////////////////////////

$_ENV is used to return the environment variables from the web server.

-->
<?php
echo'<div class="container" style="width=40%">
';
echo '<h1> $_ENV </h1>' ;
var_dump(getenv('os'));
$_ENV['USER']='here';
echo "<br><h3>my username is ".$_ENV['USER']."<br></h3><br></div>";
?>

<!--
//////////////////////////////////////////////////////////////////////////////////

 $_COOKIE Cookies are small text files loaded from a server to a client 
computer storing some information regarding the client computer, 
so that when the same page from the server is visited by the user, 
necessary information can be collected from the cookie itself,
decreasing the latency to open the page.
-->
<?PHP
echo '<div class="container" style="width=40%">
<h1>The $_COOKIE</h1>
';
$cookie_name = "haifaa";
$cookie_value = "haifaa cookie";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
//setrawcookie();

if(!isset($_COOKIE[$cookie_name]))
{
 echo "Cookie named '" . $cookie_name . "' is not set!";
} else 
{
 echo "Cookie '" . $cookie_name . "' is set!
";
 echo "Value is: " . $_COOKIE[$cookie_name];
}

echo'</div>';
?>


<!--
//////////////////////////////////////////////////////////////////////////////////

  $_SESSION Sessions are wonderful ways to pass variables. 
All you need to do is start a session by session_start();Then all the variables
 you store within a $_SESSION, you can access it from anywhere on the server.
-->
<?php
echo '<div class="container" style="width=40%">
<br><h1>The $_SESSION</h1><br>
';
session_start();
$_SESSION['haifaa']='<h4>The homework of php session </h4>';
echo $_SESSION['haifaa'];
echo "Session variables are set.<br><br><br>";

echo'</div>';
?>

<!--
/////////////////////////////////////////////////////////////////////////////////
$_FILES is a super global variable which can be used to upload files. 

-->
<div class="container" style="width=40%">
<h1>The $_FILE</h1>

<form action="superglobal_in_php.php" method="post"
enctype="multipart/form-data"><br>
<label for="file">Filename:</label><br>
<input type="file" name="fileToUpload"/><br>
<input type="submit" name="submit" value="Submit" /><br>
</form><br>
</div>

<?php
if(isset($_FILES["file"])){
    if ($_FILES["file"] > 0)
{


  $target_path = "C:/";  
  $target_path = $target_path.basename( $_FILES['fileToUpload']['name']);   
  
  if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_path)) 
  {  
    echo "File uploaded successfully!";  
  }
  else
  {
    echo "Sorry, file not uploaded, please try again!";  
  } 

}
}
?>
<!--
  ////////////////////////////////////////////////////////////////////////////////////////
-->



</div>

         
         <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>