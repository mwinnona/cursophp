<?php
    session_start();

    session_unset();
    
    session_destroy();

    header('Location: http://localhost/bt-admin/index.php?pagina=login');

?>