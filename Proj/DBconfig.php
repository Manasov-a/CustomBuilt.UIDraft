
<?php
/*
code used was obtained from the Software Engineering & Testing Brightspace page
*/
  $servername = "localhost"; 
  $username = "root"; 
  $password = "toor";
  $dbname = "custombuilt"; 

  $conn = mysqli_connect($servername, $username, $password, $dbname);


  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
   }
  else
   {
     echo "Successfully Connected to Database<br/><br/>";
   }

?>