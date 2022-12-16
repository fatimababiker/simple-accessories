<?php
include('connect.php');
if(isset($_POST['Send'])){
    $YOURORDER =$_POST['ordername'];
    $YOURORDERCOUNT =$_POST['ordercount'];
    $YOURPHONE =$_POST['phoneorder'];
 $insert ="INSERT INTO orders(ordername , ordercount , phoneorder) VALUES('$YOURORDER','$YOURORDERCOUNT','$YOURPHONE')";
mysqli_query($con,$insert);    
}
?>