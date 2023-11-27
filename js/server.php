<?php

include __DIR__ . '/db.php';

$response = [
    'success' => true,
    'results' => $todos
];



header('Content-Type: application/json');
echo json_encode($response);
