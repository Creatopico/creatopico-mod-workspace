<?php
$keys = isset($_GET['key']) ? array_map('trim', explode(',', strtolower($_GET['key']))) : array();
$packages = array();

$packages[] = array(
    'name' => 'Creatopico',
    'title' => 'Creatopico 2.1 - Межсезонье',
    'version' => '2023-02-23-20-37-28',
    'priority' => 0,
    'location' => 'creatopico.json',
);

$out = array('minimumVersion' => 1, 'packages' => $packages);
header('Content-Type: text/plain; charset=utf-8');
echo json_encode($out);
