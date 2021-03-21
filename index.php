<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
session_start();

if(isset($_SESSION['id']) && !empty($_SESSION['id'])){
    echo "Área restrita..";
}else {
    header("Location: login.php");
}

?>