<?php

$mac = exec('getmac');

$mac = strtok($mac,' ');

echo "mack of client is: ".$mac;
echo '<br>';
?>



<?php

if (!empty($_SERVER['HTTP_CLIENT_IP']))
{
    $ip = $_SERVER['HTTP_CLIENT_IP'];
    echo $ip;
}
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    echo $ip;
}
else{
    $ip = $_SERVER['REMOTE_ADDR'];
    echo $ip;
}

echo '<br>';
?>



<?php
 function getUserIp()
 {
     if(isset($_SERVER['HTTP_CLIENT_IP']))
     {
        $ipaddr = $_SERVER['HTTP_CLIENT_IP'];
     }
    elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR']))
     {
        $ipaddr = $_SERVER['HTTP_X_FORWARDED_FOR'];
     }
    elseif (isset($_SERVER['HTTP_X_FORWARDED'])) {
        $ipaddr = $_SERVER['HTTP_X_FORWARDED'];
    }
    elseif (isset($_SERVER['HTTP_X_CLUSTER_CLIENT_IP'])) {
        $ipaddr = $_SERVER['HTTP_X_CLUSTER_CLIENT_IP'];
    }
    elseif(isset($_SERVER['HTTP_FORWARDED_FOR']))
    {
        $ipaddr = $_SERVER['HTTP_FORWARDED_FOR'];
    }
    elseif (isset($_SERVER['HTTP_FORWARDED'])) {
        $ipaddr = $_SERVER['HTTP_FORWARDED'];
    }
    elseif (isset($_SERVER['REMOTE_ADDR'])) {
        $ipaddr = $_SERVER['REMOTE_ADDR'];
    }
    else {
        $ipaddr = 'UNKNOWN';
    }

    return $ipaddr;
 }


 echo getUserIp();

 ?>