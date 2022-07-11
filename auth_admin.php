<?php
    /*session_start();*/
    if(!isset($_SESSION["adminusername"])) {
        echo ("<script LANGUAGE='JavaScript'>
            window.alert('Please Login');
              window.location.href='../index.php';
            </script>");
        exit();
    }
?>
