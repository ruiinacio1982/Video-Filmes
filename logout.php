<?php 

include('ligacao.php');

if(isset($_SESSION['CodUtil'])) {
    unset($_SESSION['CodUtil']);
}
if(isset($_SESSION['Username'])) {
    unset($_SESSION['Username']);
}

header('Location: index.php?msg=logout');

?>