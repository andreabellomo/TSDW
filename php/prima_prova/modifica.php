<?php

    echo"bravo ";

    require("connection.php");
    $conn = get_conn();

    if($_SERVER['REQUEST_METHOD']=="GET"){
        

        if(isset($_GET['isbn'])){

            $isbn = $_GET['isbn'];

            echo "Modifica del libro : ". $isbn . " <br>";

            echo "<form action = '' method = 'POST'>
            <input type ='hidden' name = 'isbn' value ='$isbn'>
            Titolo  <input type ='text' name = 'titolo'>
            Autore  <input type ='text' name = 'autore'>
            Prezzo  <input type ='text' name = 'prezzo'>
            <input type ='submit' name ='action' value = 'update'>
            <input type ='submit' name ='action' value = 'delete'>
            </form>
            ";

            $sql = "SELECT * FROM books WHERE isbn ='$isbn'";
            $query = $conn->query($sql);

        }        
    }

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $isbn = $_SERVER['isbn'];
        $titolo = $_SERVER['titolo'];
        $autore = $_SERVER['autore'];
        $prezzo = $_SERVER['prezzo'];

        if($_SERVER['action'] == "update"){ 

            $sql = "UPDATE books SET titolo = '$isbn', autore = '$autore',titolo = '$titolo',prezzo = '$prezzo' WHERE isbn = '$isbn'  ";
            $query = $conn->query($sql);

        }

        if($_SERVER['action'] == "delete"){

            $sql = "DELETE FROM books WHERE isbn = '$isbn' ";
            $query = $conn->query($sql);

        }
        

    }
?>