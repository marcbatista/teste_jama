<?php
    
    $con = new mysqli("localhost", "root", "root", "lista");
    if (mysqli_connect_errno()) trigger_error(mysqli_connect_error());
    
    
    $qryLista = mysqli_query($con, "SELECT * FROM usuario");    
    while($resultado = mysqli_fetch_assoc($qryLista)){
        $vetor[] = array_map('utf8_encode', $resultado); 
    }        
   
  
    echo json_encode($vetor);
$con->close();
    
?>