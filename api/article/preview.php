<?php

require "markdown.php";

$articlesDir = dirname(__DIR__, 2) . "/articles/";
$files = array_filter(scandir($articlesDir, SCANDIR_SORT_DESCENDING), fn($id) => $id !== "." && $id !== "..");

function getArticleContent($id) {
    global $articlesDir;
    $file = "$articlesDir$id/index.md";
    return file_exists($file) ? ["id" => $id, "content" => substr(parseMarkdown(file_get_contents($file), true), 0, 320) . "…"] : null;
}

header("Content-Type: application/json");
echo json_encode(array_key_exists("latest", $_GET) ?? false ? getArticleContent($files[0]) ?? http_response_code(404) && ["error" => "Article not found"] : array_map("getArticleContent", $files));

?>