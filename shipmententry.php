<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">



<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
 require_once('connect.php'); 

$s_id=$_POST['s_id'];
$c_email=$_POST['c_email'];
$s_weight=$_POST['s_weight'];
$n_items=$_POST['n_items'];
$c_pos=$_POST['c_pos'];
$desc=$_POST['desc'];

$query="INSERT INTO `shipment`.`s_entry`(`s_id`, `c_email`, `s_products`, `description`, `s_weight`) VALUES ('$s_id','$c_email','$n_items','$desc','$s_weight');";
$result=mysql_query($query);
$query="INSERT INTO `shipment`.`cur_position`(`s_id`, `w_id`) VALUES ('$s_id','$c_pos');";
$result=mysql_query($query);
?>
<?php
header("location:shipmententry.html");
?>
    

</body>
</html>