<?php


echo "<form action='' method= 'POST'>
    <input type = 'submit' name = 'action' value = 'vedi'>
    </form>

    ";

echo "<form action='' method= 'POST'>
ISBN : <input type = 'text' name = 'isbn' >
TIOLO : <input type = 'text' name = 'titolo' >
AUTORE : <input type = 'text' name = 'autore' >
PREZZO  : <input type = 'text' name = 'prezzo' >
<input type = 'submit' name = 'action' value = 'inserisci' >
</form>

";


if($_SERVER["REQUEST_METHOD"] == "POST"){

    require("connection.php");
    $conn = get_conn();

    if($_POST["action"] == "vedi"){

        $sql = "SELECT * FROM books";

    if($query = $conn->query($sql)){
        
       echo "query select eseguita <br>";

       if($query->num_rows > 0){
        while($raw = $query->fetch_assoc()){
            echo "isbn :  <a href='modifica.php?isbn=".$raw['isbn'] . "'>". $raw['isbn'] . "</a><br>";
            echo "Titolo :  ". $raw['titolo'] . "<br>";
            echo "Autore :  ". $raw['autore'] . "<br>";
            echo "Prezzo :  ". $raw['prezzo'] . "<br>";
            echo "<br>";
            echo "<br>";
            
        }  
       }
       else{
        echo"Nessun libro registrato <br>";
       }
    }
    } 

    if($_POST["action"] == "inserisci"){

        $isbn = $_POST['isbn'];
        $titolo = $_POST['titolo'];
        $autore = $_POST['autore'];
        $prezzo = $_POST['prezzo'];


        $sql = "INSERT INTO books VALUES (?,?,?,?)";

        $stm = $conn->prepare($sql);
        $stm->bind_param("sssd", $isbn,$titolo,$autore,$prezzo);
        
        
        if($stm->execute()){
            echo "inserimento nuovo libro riuscito <br>";
        }else{
            echo "errore nell inserimento di un nuovo libro";
        }

        
    
    }
}







?>