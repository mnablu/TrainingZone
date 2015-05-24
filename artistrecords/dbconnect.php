<?php
try {

    $dbh = new PDO("sqlite:artrecords.sqlite"); 
}
catch(PDOException $e)
{
    echo $e->getMessage();
}
?>