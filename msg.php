<?php

$myfile = fopen("data.txt", "r");
echo fread($myfile, filesize("data.txt"));
fclose($myfile);

?>