<?php
$keys = isset($_GET['key']) ? array_map('trim', explode(',', strtolower($_GET['key']))) : array();
$packages = array();

$packages[] = array(
    'name' => 'Creatopico',
    'title' => 'Creatopico modpack',
    'version' => '2023-01-11-20-54-30',
    'priority' => 0,
    'location' => 'creatopico.json',
);

if (count(array_intersect(array('season3private'), $keys)) > 0)
$packages[] = array(
    'name' => 'Season3',
    'title' => 'Season3',
    'version' => '2023-01-29-15-49-24',
    'priority' => 0,
    'location' => 'season3.json',
);

$out = array('minimumVersion' => 1, 'packages' => $packages);
header('Content-Type: text/plain; charset=utf-8');
echo json_encode($out);
