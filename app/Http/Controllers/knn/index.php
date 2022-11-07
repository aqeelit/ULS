<?php
require_once __DIR__ . '/vendor/autoload.php';

use Phpml\Classification\KNearestNeighbors;

// [weight, diameter]
$samples = [[2 ,22, 8], [1,25,10], [3 ,23, 7], [ 3,28, 2], [1 ,30, 10], [3,20,6]];
$labels = ['level 1', 'level 1', 'level 2', 'level 2', 'level 1', 'level 2'];

$classifier = new KNearestNeighbors();
$classifier->train($samples, $labels);

$prediction = $classifier->predict([3,24,6]);
echo $prediction;
