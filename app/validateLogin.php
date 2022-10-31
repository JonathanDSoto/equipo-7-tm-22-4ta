<?php 
    if(!isset($_SESSION['token'])){
        header("Location:".BASE_PATH);
    }
?>