<?php

if (!isset($_GET["id"]) || !isset($_GET["file"])) {
    http_response_code(400);
    echo json_encode(["error" => "Article ID and file path are required"]);
    exit;
}

$articleId = $_GET["id"];
$file = $_GET["file"];

if ($file === "index.md") {
  http_response_code(403);
  exit;
}

$assetsDir = dirname(__DIR__, 2) . "/articles/{$articleId}/";
$filePath = $assetsDir . $file;

if (file_exists($filePath)) {
    $fileInfo = pathinfo($filePath);
    $mimeType = mime_content_type($filePath);
    header("Content-Type: {$mimeType}");
    header("Content-Disposition: inline; filename=\"{$file}\"");
    header("Content-Length: " . filesize($filePath));
    
    readfile($filePath);
    exit;
} else {
    http_response_code(404);
    echo json_encode(["error" => "File not found"]);
}

?>