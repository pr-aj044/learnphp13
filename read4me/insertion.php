<?php

if(isset($_POST["name"])){
    $name=$_POST["name"];
    $rollno=$_POST["rollno"];
    $admno=$_POST["adno"];
    $college=$_POST["college"];
    
    $serv="localhost";
    $dbname="read4me";
    $usname="root";
    $pswda="";
    $con=new mysqli($serv,$usname,$pswda,$dbname);
    $r=array();
    
    $sql="INSERT INTO `user_data`(`name`, `rollno`, `adno`, `college`) VALUES ('$name','$rollno','$adno','$college')";
    $resulr=$con->query($sql);
    
    if($resulr===TRUE){
    $r['status']="success";
    
}
else
{
    $r['status']="failed";
    
}
    echo json_encode($r);

}


