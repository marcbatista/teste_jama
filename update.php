<?php 
 $con = new mysqli("localhost", "root", "root","lista");
 if (mysqli_connect_errno()) trigger_error(mysqli_connect_error());

 if($_POST){
        $name = $_POST['name'];
        $id = $_POST['id'] + 1;

         $oldName = mysqli_query($con, "SELECT nome FROM usuario WHERE id=$id");   
        
         $qryLista = mysqli_query($con, "UPDATE usuario SET nome='$name' where id=$id");         
        
         $oldName = mysqli_fetch_assoc($oldName);          
        
         echo rename('img/'.$oldName['nome'],'img/'.$name);
    }


$con->close();
?>