<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Multiple Select Dropdown in PHP</title>
  <style>
    .container {
      max-width: 350px;
      margin: 50px auto;
      text-align: center;
    }
    select {
      
      min-height: 150px;
    }

    input[type="submit"] {
      margin-bottom: 30px;
    
    }
  </style>
</head>

<body>

  <div class="container mt-5">
    <form action="" method="post" class="mb-3">
      <h3>SELECT SUJECTS</h3> 
        <select name="subject[]" multiple>
          <option value="" disabled selected>Choose option</option>
          <option value="English">ENGLISH</option>
          <option value="Maths">MATHS</option>
          <option value="Computer">COMPUTER</option>
          <option value="Physics">PHYSICS</option>
          <option value="Chemistry">CHEMISTRY</option>
          <option value="Hindi">HINDI</option>

        </select>

        <input type = 'submit' name = 'submit' value = Submit> 
    </form>

    <?php
      if(isset($_POST['submit'])){
        //$y=$_POST['lang'];
        if(!empty($_POST['subject'])) {
            $y=$_POST['subject'];
          foreach($y as $selected){
              $x=$selected;
              print "You selected $x<br/>"; 
              $x.=$selected;
          }          
        } else {
          echo 'Please select the value.';
        }
      }
    ?>
  </div>
<table></table>
</body>

</html>