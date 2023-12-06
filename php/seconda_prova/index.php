<?php

    require("connection.php");

    echo "<h1>film consigliato:</h1><br>";

    $conn = get_connection();

    $sql = "SELECT * FROM flist ORDER BY RAND() LIMIT 1";

    if($ris = $conn->query($sql)){
        //echo"query eseguita con successo";
        $raw = $ris->fetch_assoc();

    }else{
        echo "query fallita";
    }

    echo "TITOLO : " . $raw['titolo'] . "<BR>";
    echo "REGISTA : " . $raw['regista'] . "<BR>";


    echo "<form method = 'post' action = '' >
        TITOLO : <input type = text name = 'titolo'>
        REGISTA: <input type = text name = 'regista'>
        <input type = submit name = 'choice' value = 'cerca_film'>
        <input type = submit name = 'choice' value = 'vedi_wlist'>
        </form>
    ";


    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        
            
        $titolo = $_POST['titolo'];
        $regista = $_POST['regista'];

        if(isset($_POST['choice'])){
            $choice = $_POST['choice'];
            
        }

        if ($choice == "vedi_wlist"){

            $sql = "SELECT * FROM wlist";

            if($ris = $conn->query($sql)){
                //echo"query eseguita con successo";
                echo "WLIST : <br>";
               while($raw = $ris->fetch_assoc()) {
                echo "TITOLO : " . $raw['titolo'] . "<BR>";
                echo "REGISTA : " . $raw['regista'] . "<BR>";
                echo "<br>";

               }
               echo "<a href='index.php' > torna indietro </a>";

               echo "<form action = '' method = 'post'>
                    <input type = 'submit' name = 'truncate' value = 'svuota'>
                    </form>";
               
                

            }else{
                echo "query fallita";
            }

        }else if(isset($titolo) && isset($regista)){
            $sql = "SELECT * FROM flist WHERE titolo =  ? AND regista = ?  ";

            $stm = $conn->prepare($sql);

            $stm->bind_param("ss", $titolo,$regista);

            $stm->execute();

            if($ris = $stm->get_result()){
                if($ris->num_rows >0){
                    //echo "c'è uno o piu film con quel nome";
                    $raw = $ris->fetch_assoc();
                    echo " FILM RICHIESTO TROVATO <BR>";
                    echo "TITOLO : " . $raw['titolo'] . "<BR>";
                    echo "REGISTA : " . $raw['regista'] . "<BR>";
                    echo "<a href='index.php' > torna indietro </a>";

                }else{
                    echo "non c'è nessun film con quel nome, vuoi inserirlo nella wlist ? ";
                    echo "<form method = 'post' action = '' >
                        <input type = hidden name = 'titolo' value = '$titolo'>
                        <input type = hidden name = 'regista' value = '$regista'>
                        <input type = submit name = 'scelta' value = 'si' >
                        <input type = submit name = 'scelta' value = 'no' >
                        </form>
                    ";

                    $scelta = $_POST['scelta'];

                    if(isset($scelta)){

                        if($scelta == 'si'){

                            $sql = "INSERT INTO wlist values(?,?)";

                            $stm = $conn->prepare($sql);

                            $stm->bind_param("ss",$titolo,$regista);

                            if($stm->execute()){
                                echo "Film inserito con successo nella wlist <br>";
                            }

                        }else if ($scelta == 'no'){
                            echo " hai scelto no ";
                            header('location:index.php');
                            
                        }
                    }
                }
            }else{
                echo "errore esecuzione query";
            }
                
        }

        if(isset($_POST['truncate'])){
            $sql = "TRUNCATE TABLE wlist";
            if ($conn->query($sql)) {
                echo "La tabella 'wlist' è stata svuotata.";
            } else {
                echo "Errore durante lo svuotamento della tabella 'wlist'.";
            }

        }
        
    }

?>