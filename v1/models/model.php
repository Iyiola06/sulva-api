<?php


// $dbname = 'mckodevc_demo23';
// define("DBNAME", 'mckodevc_demo23');
//  define("DBUSER", 'root');
//  define("DBPASS", 'vagrant');

$dbname = getenv('DB_NAME');
define("DBNAME", getenv('DB_NAME'));
define("DBUSER", getenv('DB_USER'));
define("DBPASS", getenv('DB_PASSWORD'));

        try{

         $conn = new PDO('mysql:host=localhost;dbname='.DBNAME, DBUSER, DBPASS);

         $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
      }
      catch(PDOException $e) {
                 die("Something Went Wrong: Configure a database with $dbname ");
               //echo $e->getMessage();
       }

       // define("DBNAME", getenv('DB_NAME'));
       // define("DBUSER", getenv('DB_USER'));
       // define("DBPASS", getenv('DB_PASSWORD'));

       // define("DBNAME", 'mckodevc_demo');
       //  define("DBUSER", 'root');
       //  define("DBPASS", 'vagrant');
 ?>
