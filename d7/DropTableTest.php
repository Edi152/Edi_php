<?php

try {
   $pdo = new PDO('mysql:host=localhost;dbname=testdb',"root","");

   $sql = "DROP TABLE test";

   $pdo->exec($sql);

   echo "Table test deleted";
   
}catch(PDOException $e) {
    echo $e->getMessage();
}

?>