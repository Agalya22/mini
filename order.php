<?php 


extract($_POST);
include 'config.php';


$query = "INSERT INTO `order`(`name`, `email`, `order_date`, `address`, `city`, `zip`, `state`, `occasion`) VALUES 
('$name','$email','$order_date','$address','$city','$zip','$state','$occasion')";

if($conn->query($query) === TRUE){
    echo("1");
}
else{
    echo $conn -> error;
}



?>