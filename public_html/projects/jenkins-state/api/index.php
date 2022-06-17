<?php

$json = json_decode(
    file_get_contents(
        "https://integration.wikimedia.org/ci/view/Beta/job/beta-code-update-eqiad/lastBuild/api/json"
    ),
    true
);
$timestamp = round($json["timestamp"] / 1000);
echo time() . PHP_EOL;
echo $timestamp . PHP_EOL;
$dt = DateTime::createFromFormat("U", $timestamp);
echo $dt->format("Y-m-d H:i:s");
var_dump($dt);
