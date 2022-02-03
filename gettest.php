<?php

   $ip = $_SERVER['REMOTE_ADDR'];
   echo $ip;

   echo '<br>';
   echo '<br>';
   echo '<br>';

   $mac =  exec('getmac');
   $mac = strtok($mac,' ');

   echo $mac;
?>