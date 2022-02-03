<?php

    function OpenCon()
    {
        $dbhost =  "localhost";
        $dbuser = "root";
        $dbpass = "";
        $db = "shakib";
    

    $conn = new mysqli($dbhost,$dbuser,$dbpass,$db) or die("Conntection failler: %s\n".$conn->error);
    
    return $conn;
    }

    function CloseCon($conn)
    {
        $conn->close();
    }

    ?>
