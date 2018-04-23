<?php 
 $con = new mysqli("localhost", "root", "root","lista");
 if (mysqli_connect_errno()) trigger_error(mysqli_connect_error());

 if($_POST){
       
        $id = $_POST['id'] + 1;        
        
         $qryLista = mysqli_query($con, "DELETE  FROM usuario where id=$id");         
        
    }


$con->close();
?>