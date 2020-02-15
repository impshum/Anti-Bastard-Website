<?php
$data = $_POST['gigs'];
$txt = "";

foreach ($data as $key => $value) {
    $date = $value['date'];
    $location = $value['location'];
    $txt = "$txt$date|$location\n";
}

$fp = fopen('gigs.csv', 'w');
fwrite($fp, $txt);
fclose($fp);
echo 'saved gigs';
