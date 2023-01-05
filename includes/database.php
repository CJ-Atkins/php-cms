<?php

/** Get the Database connection
 *
 * @return object Connection to a MySQL stream_socket_server
 */

function getDB()
{
   $db_host = "localhost";
   $db_name = "cms";
   $db_user = 'cms_www';
   $db_pass = ']5OodUvz](ydoT9Y';

   $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

   if (mysqli_connect_error()) {
      echo mysqli_connect_error();
      exit;
   };

   return $conn;
};
