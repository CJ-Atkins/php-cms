<?php

// Database
// A connection to the database
class Database
{

   // Get the database connection_aborted
   // @return PDO object Connection to the database server
   public function getConn()
   {
      $db_host = "localhost";
      $db_name = "cms";
      $db_user = 'cms_www';
      $db_pass = ']5OodUvz](ydoT9Y';

      $dsn = 'mysql:host=' . $db_host . ';dbname=' . $db_name . ';charset=utf8';

      try {
         $db = new PDO($dsn, $db_user, $db_pass);
         $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         return $db;
      } catch (PDOException $e) {
         echo $e->getMessage();
         exit;
      }
   }
}
