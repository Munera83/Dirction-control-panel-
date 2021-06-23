<?php
$con=mysqli_connect('localhost','munera','1234','robotarm');
if(!$con)
  echo 'Connection error';
else
{$result = mysqli_query($con, "select Dirction from base where ID=1");
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
          echo $row["Dirction"];
        }
      } 
    else 
      echo "يجب اعطاء الداتابيس سطر";
}
?>