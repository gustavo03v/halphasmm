<?php
    $servidor = "localhost";
    $usuario = "usuario";
    $senha = "senha";
    $dbname = "nome";
    
    //Criar a conexao
    $conn1 = mysqli_connect($servidor, $usuario, $senha, $dbname);
    
    if(!$conn1){
        die("Falha na conexao: " . mysqli_connect_error());
    }else{
        //echo "Conexao realizada com sucesso";
    }  
?>