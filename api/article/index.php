<?php

require "markdown.php";

$id = $_GET["id"] ?? null;
if (!$id) {
  http_response_code(400);
  echo json_encode(["error" => "Article ID is required"]);
  exit;
}

$articlesDir = dirname(__DIR__, 2) . "/articles/";

$file = $articlesDir . $id . "/index.md";

if (file_exists($file)) {
  $markdown = file_get_contents($file);

  echo parseMarkdown($markdown);
} else {
  http_response_code(404);
  echo json_encode(["error" => "Article not found"]);
}

?>