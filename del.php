<?php
    session_start();
    if(isset($_GET["key"]))
    {
        $id = $_GET["key"];
        if(isset($_SESSION["myArray"]))
        {
            $tmp = $_SESSION["myArray"];
            unset($tmp[$id]);
            $_SESSION["myArray"] = $tmp;
            header("Location:sss5.php");
        }
    }

?>