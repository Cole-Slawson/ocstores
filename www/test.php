<?php  # test.php sandbox
    
    define('DBNAME', 'online_store');
    define('DBUSER', 'root');
    define('DBPASS', 'goodness');
    $conn = new PDO('mysql:host=localhost; dbname=DBNAME', 'DBUSER', 'DBPASS');



?>