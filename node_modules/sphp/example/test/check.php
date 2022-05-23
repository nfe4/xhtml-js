<?php var_dump($_POST); //Allow you to see if php page getting post value or not.

$query = "SELECT * FROM `subject` WHERE ltc_name='".$_SESSION['ltc_name']."' AND sub_code='".$_SESSION['ltc_name']."'";
$sql = "UPDATE `subject` SET ltc_status = '".$quickVar1a."' where field1 != '".$quickVar1a."'";
$toogle= mysqli_real_escape_string($conn,$_POST['toogle']);

   if(isset($toogle) && $toogle!=='')
   {
       $sql="update status set toogle='$toogle'";
       if($conn->query($sql))
       {
        echo 'updated success';
       }

   }else{
        echo 'error: not updated';
   }

   ?>