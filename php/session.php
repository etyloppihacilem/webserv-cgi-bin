<?php
    session_start();
    echo "Hello world in php !\n<br>\n";
    echo date("D, d M Y H:i:s");
    if (isset($_SESSION["SessionDate"])) {
        echo "<br> Last seen on ";
        echo $_SESSION["SessionDate"];
    } else {
        echo "<br> You're new !";
    }
    $_SESSION["SessionDate"]=date("D, d M Y H:i:s");
    echo "\n";
?>
