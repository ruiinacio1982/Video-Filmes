<?php

if(!isset($_SESSION)) {
    session_start();
}

$servidor="localhost";
$bd="video_filmes";
$user="root";
$password="";

try {
    $ligacao = mysqli_connect($servidor, $user, $password, $bd);

    if($ligacao->connect_errno) {
        echo "<p>Ocorreu um erro na ligação.</p>";
    }
    else {
        $ligacao->set_charset("utf8");
        
    }
    
}
catch (exception) {

}


?>