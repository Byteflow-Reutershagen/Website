<?php

function parseMarkdown($markdown, $preview = false) {
  # Headings
  $markdown = preg_replace("/^(#\s+)(.*)$/m", "<h1>$2</h1>", $markdown);
  $markdown = preg_replace("/^(##\s+)(.*)$/m", "<h2>$2</h2>", $markdown);
  $markdown = preg_replace("/^(###\s+)(.*)$/m", "<h3>$2</h3>", $markdown);
  $markdown = preg_replace("/^(####\s+)(.*)$/m", "<h4>$2</h4>", $markdown);
  $markdown = preg_replace("/^(#####\s+)(.*)$/m", "<h5>$2</h5>", $markdown);
  $markdown = preg_replace("/^(######\s+)(.*)$/m", "<h6>$2</h6>", $markdown);

  # Bold
  $markdown = preg_replace("/\*\*(.*?)\*\*/", "<b>$1</b>", $markdown);
  $markdown = preg_replace("/__(.*?)__/", "<b>$1</b>", $markdown);

  # Italic
  $markdown = preg_replace("/\*(.*?)\*/", "<i>$1</i>", $markdown);
  $markdown = preg_replace("/_(.*?)_/", "<i>$1</i>", $markdown);

  # Strikethrough
  $markdown = preg_replace("/~~(.*?)~~/", "<del>$1</del>", $markdown);

  # Code
  $markdown = preg_replace("/`(.*?)`/", "<code>$1</code>", $markdown);

  # Image
  if ($preview) {
    $markdown = preg_replace("/!\[(.*?)\]\((.*?)\)/", "$1", $markdown);
  } else {
    $markdown = preg_replace("/!\[(.*?)\]\((.*?)\)/", '<img src="$2" alt="$1" />', $markdown);
  }

  # Link
  if ($preview) {
    $markdown = preg_replace("/\[(.*?)\]\((.*?)\)/", "$1", $markdown);
  } else {
    $markdown = preg_replace("/\[(.*?)\]\((.*?)\)/", '<a href="$2" target="_blank">$1</a>', $markdown);
  }

  # Paragraphs
  $markdown = preg_replace("/(?<=^|^\n|\n\n)((?:\n?[^\n])+)(?=$|\n$|\n\n)/", "<p>$1</p>", $markdown);
  $markdown = preg_replace("/<p>(<\w+>.+?<\/\w+>)<\/p>/", "$1", $markdown);
  $markdown = str_replace("\n", "", $markdown);

  return $markdown;
}

?>