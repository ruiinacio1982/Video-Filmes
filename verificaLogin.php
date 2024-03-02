
<?php
include('ligacao.php');

//Verifica se estão preenchidos os dados username e password
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = filter_input(INPUT_POST, 'username');
    $pass = filter_input(INPUT_POST, 'password');
}

if (empty($login) || empty($pass)){
	header('Location: login.php?erro=preenchimento');
}
else {
	//Encriptação da palavra-passe com método sha1()
    $pass = sha1($pass);

    $consulta = "SELECT CodUtilizador FROM utilizadores ";
    $consulta .= "WHERE username like '$login' AND password='$pass'";
 
    try {
        $resultado = $ligacao->query($consulta);
        if($resultado->num_rows>0) {
            header('Location: index.php?log=sucesso');
        }
        else {
            header('Location: login.php?log=erro');
        }
        
    }
    catch(Exception $e) {
        echo ' Falha na consulta: '. $this->_ligacao->error;
    }
}

?>

