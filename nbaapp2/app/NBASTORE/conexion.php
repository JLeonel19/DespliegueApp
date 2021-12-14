<?php
function conectardb(){
    $server = "localhost2";
    $user = "root";
    $pass = "root";
    $db = "nba_store";

    $cone = mysqli_connect($server,$user,$pass);
    mysqli_select_db($cone,$db);

    return $cone;
}
?>