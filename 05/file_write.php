<?php
$data[] = date('Y/m/d H:i:s');
$data[] = $_SERVER['SCRIPT_NAME'];
$data[] = $_SERVER['HTTP_USER_AGENT'];
$data[] = $_SERVER['HTTP_REFERER'];

//write modeでopen
$file = @fopen('access.log', 'a') or die('Couldn\'t open!');
//排他ロック
flock($file, LOCK_EX);
//write
fwrite($file, implode("\t", $data) . "\n");
//unlock
flock($file, LOCK_UN);
//close
fclose($file);

print "Done.";


