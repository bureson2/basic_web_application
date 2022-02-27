<?php
	//Odstrani session, zalozenou v login.php kontrolujici prihlaseni 
    session_start();
    $_SESSION = array();
    session_destroy();

    header('Location: ../index.php');
?>