<?php
$config = parse_ini_file("config.ini",true);

$title = $config['PAGE']['Title'];
$description = $config['PAGE']['Description'];
$facebook = $config['PAGE']['Facebook'];
$instagram = $config['PAGE']['Instagram'];
$twitter = $config['PAGE']['Twitter'];
$bandcamp = $config['PAGE']['Bandcamp'];

$arr = array('title' => $title, 'desc' => $description, 'fb' => $facebook, 'ig' => $instagram, 'tw' => $twitter, 'bc' => $bandcamp);
echo json_encode($arr);
