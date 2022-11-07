<?php

         $dbhost = 'localhost';
         $dbuser = 'root';
         $dbpass = '';
         $dbname = 'photopet';
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
                  if(! $conn ) {
                     die("Could not connect: " . $mysqli -> connect_error);
                  } 
               

?>