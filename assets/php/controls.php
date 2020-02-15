<?php
date_default_timezone_set('Europe/London');

$config = parse_ini_file("cms/config.ini",true);

$title = $config['PAGE']['Title'];
$description = $config['PAGE']['Description'];
$facebook = $config['PAGE']['Facebook'];
$instagram = $config['PAGE']['Instagram'];
$twitter = $config['PAGE']['Twitter'];
$bandcamp = $config['PAGE']['Bandcamp'];

$twitter_handle = str_replace("https://twitter.com/","",$twitter);

$filename = 'cms/gigs.csv';
$all_gigs =  array_map('str_getcsv', file($filename));


function get_old_gigs($all_gigs)
{
    $now = time();
    $c = 0;
    foreach ($all_gigs as $key => $value) {
        $parts = explode("|", $value[0]);
        $date = $parts[0];
        $dater = strtotime($date);
        $location = $parts[1];
        if ($dater < $now) {
            echo "<p class='is-size-5'>$date - $location</p>";
            $c++;
        }
    }
    if ($c == 0) {
        echo "<p class='is-size-5' data-aos='fade-down'>No gigs in your pipeline</p>";
    }
}

function get_new_gigs($all_gigs)
{
    $now = time();
    $c = 0;
    foreach ($all_gigs as $key => $value) {
        $parts = explode("|", $value[0]);
        $date = $parts[0];
        $dater = strtotime($date);
        $location = $parts[1];
        if ($dater > $now) {
            echo "<p class='is-size-5' data-aos='fade-down'>$date - $location</p>";
            $c++;
        }
    }
    if ($c == 0) {
        echo "<p class='is-size-5' data-aos='fade-down'>No gigs in your pipeline</p>";
    }
}
