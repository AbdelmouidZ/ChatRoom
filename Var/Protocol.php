<?php
if(isset($_GET['protocol'])){
    if(($_GET['protocol'] != "auth.login")&&($_GET['protocol'] != "auth.register")){
        if(isset($_SESSION['id'])){
            $protocol_page = $_GET['protocol'];
        }else{
            $protocol_page = "auth.login";
            $header_version = "header.public";
        }
    }else{
        if(isset($_SESSION['id'])){
            $protocol_page = "main";
            $header_version = "header.logged";
        }else{
            $protocol_page = "auth.login";
            $header_version = "header.public";
        }
    }
    if(isset($_SESSION['id'])){
        $header_version = "header.logged";
    }else{
        $header_version = "header.public";
    
}else{
    if(isset($_SESSION['id']){
        $protocol_page = "main";
        $header_version = "header.logged";
    }else{
        $protocol_page = "auth.login";
        $header_version = "header.public";
    }
}
?>