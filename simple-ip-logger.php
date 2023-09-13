<?php
$ip = $_SERVER['REMOTE_ADDR'];
$user = $_SERVER['REMOTE_USER'];
$host = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$useragent = $_SERVER['HTTP_USER_AGENT'];
$http = $_SERVER['HTTP_HOST'];
$remote = $_SERVER['REMOTE_HOST'];
$dest = 'email@email.it';
$oggetto = 'New IP Address';
$mess = $ip. '  '. $host. '  '. $user. '   '. $useragent. '   '. $http. '   '. $remote;
mail($dest, $oggetto, $mess);
header('HTTP/1.1 301 Moved Permanently');
header('Location: https://github.com/EnricoBoffetti');
exit;
?>
