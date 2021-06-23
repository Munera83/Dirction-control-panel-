<!DOCTYPE html>
<html>
<head>
<title>Base control panel</title>

<style>
body {
  background-color: #F5EFE8;
  background-image: url('background.png');
  background-repeat:no-repeat;
  background-size:cover;
}
.button { 
height: 25px; 
width: 100px; 
color: #112776 ;
}
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 90%;
}
</style>
</head>

<body text="#112776 ">

<?php 
$con=mysqli_connect('localhost','munera','1234','robotarm');
if(!$con)
  echo 'Connection error';
else
{
    if(isset($_POST['forwoard']))
     {if(!mysqli_query($con, "UPDATE base SET Dirction='k' where ID=1 "))
      {echo'<script>alert("فشلت المهمة")</script>';
       echo  mysqli_error($con); }}

    else if(isset($_POST['right']))
    {if(!mysqli_query($con, "UPDATE base SET Dirction='r' where ID=1 "))
     {echo'<script>alert("فشلت المهمة")</script>';
      echo  mysqli_error($con); }}

    else if(isset($_POST['left']))
    {if(!mysqli_query($con, "UPDATE base SET Dirction='l' where ID=1 "))
     {echo'<script>alert("فشلت المهمة")</script>';
      echo  mysqli_error($con); }}
    
    else if(isset($_POST['back']))
      {if(!mysqli_query($con, "UPDATE base SET Dirction='b' where ID=1 "))
       {echo'<script>alert("فشلت المهمة")</script>';
        echo  mysqli_error($con); }}
    
    else if(isset($_POST['stop']))
      {if(!mysqli_query($con, "UPDATE base SET Dirction='s' where ID=1 "))
       {echo'<script>alert("فشلت المهمة")</script>';
        echo  mysqli_error($con); }}

}
?>

<br><br><br><br><br><br><br><br><br><br><br><br>
<h1><center>لوحة تحكم </center></h1>
<form method="post">
<center><button class="button" name="forwoard"> أمام</button></center>
<br>
<center><button class="button" name="left"> يسار</button> &nbsp;&nbsp;
<button class="button" name="stop"> توقف</button> &nbsp;&nbsp;
<button class="button" name="right"> يمين</button></center>
<br>
<center><button class="button" name="back"> خلف</button></center>
</form>

<script>

</script>

<noscript>
 Sorry...JavaScript is needed to go ahead.
</noscript>


</body>
</html>