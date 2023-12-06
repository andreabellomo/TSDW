<?php

function get_conn(){

    $conn = new mysqli("localhost", "root","root","libreria");

    if($conn->connect_error){
        echo "connessione fallita";
        return null;
    }else{
        echo "connessione riuscita";
        return $conn;
    }

   

}

?>