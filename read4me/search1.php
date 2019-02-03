<?php
if(isset($_GET["adno"])){
    
    $user=$_GET["adno"];
    

    $serv="localhost";
    $dbname="read4me";
    $usname="root";
    $pswda="";
    $con=new mysqli($serv,$usname,$pswda,$dbname);
    $r=array();
    
    $sql="SELECT * FROM `user_data` WHERE `adno`='$user'";
    $resulr=$con->query($sql);
    
    if($resulr->num_rows>0){
    while ($row=$resulr->fetch_assoc()){
     
        $r=$row;
   
    }
    
    }
    echo json_encode($r);
}