<?php
$myfile = fopen("gigs.csv", "r") or die("Unable to open file!");
echo fread($myfile, filesize("gigs.csv"));
fclose($myfile);
