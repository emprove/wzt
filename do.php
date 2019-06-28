<?php

$content = file_get_contents('./trash.box');

preg_match_all('!\d+!', $content, $matches);

$count = array_count_values($matches[0]);

arsort($count);

array_walk($count, function($value, $key) { // foreach one love, but not today
   echo "$key - $value" . PHP_EOL; // however i like "\n"
});
