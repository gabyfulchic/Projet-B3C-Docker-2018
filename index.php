<?php
 echo "Hello World!";
 $dbh = new PDO('mysql:host=db;dbname=mysql', 'root', 'passe');
 
 foreach($dbh->query('SHOW DATABASES') as $row) {
   echo $row[0]. '<br/>';
 }
