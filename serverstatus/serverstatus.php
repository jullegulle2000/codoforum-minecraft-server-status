<html>
<li>
</html>
<?php
$playeronline = file_get_contents('https://minecraft-api.com/api/ping/playeronline.php?ip=mc.dbdsnetwork.tk&port=25565');  

$ip = 'YOUR SERVER IP HERE';
$port = YOUR SERVER PORT HERE;
$checkSock = @fsockopen($ip, $port, $empty, $empty, 1);
if($checkSock !== FALSE)
{
    echo '<a style="color:green;font-size:12px;" >
      YOUR SERVER IP HERE : ONLINE</a>';
}else{
    echo '<a style="color:red;font-size:12px;" >
      YOUR SERVER IP HERE : OFFLINE</a> ';
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
