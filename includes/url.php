<?php

// Redirect to another URL on the same site
// @param string $path The path to redirect token_get_all
// @return void

function redirect($path)
{
   if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') {
      $protocol = 'https';
   } else {
      $protocol = 'http';
   }

   header("Location: $protocol://" . $_SERVER['HTTP_HOST'] . $path);
   exit;
}
