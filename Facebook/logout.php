<?php 
session_start();
    $_SESSION['FBID'] = NULL;
    $_SESSION['FULLNAME'] = NULL;
    $_SESSION['EMAIL'] =  NULL;
header("Location: ../Vista/evento.php?el=".$_GET['el']);        // you can enter home page here ( Eg : header("Location: " ."http://www.krizna.com"); 
?>
