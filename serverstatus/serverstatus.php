<html>
<li>
</html>
<?php
$playeronline = file_get_contents('https://minecraft-api.com/api/ping/playeronline.php?ip=mc.dbdsnetwork.tk&port=25565');  

$ip = '192.168.1.245';
$port = 25565;
$checkSock = @fsockopen($ip, $port, $empty, $empty, 1);
if($checkSock !== FALSE)
{
    echo '<a style="color:green;font-size:12px;" >
      mc.dbdsnetwork.tk : ONLINE</a>';
}else{
    echo '<a style="color:red;font-size:12px;" >
      mc.dbdsnetwork.tk : OFFLINE</a> ';
}
?>
<html>
</li>

<li>
<a>
</html>
<?php
$playeronline = file_get_contents('https://minecraft-api.com/api/ping/playeronline.php?ip=mc.dbdsnetwork.tk&port=25565'); 
echo $playeronline, '/128 online';
?>
<html>
</a>
</li>
</html>
