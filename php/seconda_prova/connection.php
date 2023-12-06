<?php

function get_connection(){

    $conn = new mysqli("localhost", "root", "root", "bho");

    if( $conn->connect_error){
        echo "errore di connessione";
        return null;
    }else{
       // echo "connessione riuscita";
        return $conn;
    }
}

?>