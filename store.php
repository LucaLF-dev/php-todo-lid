<?php

include __DIR__ . "/db.php";

$new_todo = $_POST['todo'] ?? '';

$todo = [
  'text' => $new_todo,
  'done' => false
];

$todos[] = $todo;

$response = [
  'success' => true,
  'results' => $todos
];

header('Content-Type: application/json');
echo json_encode($response);
