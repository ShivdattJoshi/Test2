<html>
<body>
<?php
include "connect.php";
if(isset($_POST['SubmitButton'])){ 
  $rollno =  $_REQUEST['rollno'];
  $name =  $_REQUEST['name'];
  $subject= $_REQUEST['subject'];
  $sql = "INSERT INTO class
  values( '$rollno', '$name', '$subject')";
  if (mysqli_query($conn, $sql)) {
    echo "<br>New record inserted successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}  
?> 
</body>
</html>