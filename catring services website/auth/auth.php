<?php

if(isset($_POST['submit'])){
    if(empty($_POST['email'])){
        echo'An not entered';
    
    }else{
        echo htmlspecialchars(($_POST['email']));
    }
}




?>