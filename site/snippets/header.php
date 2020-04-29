<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- adds meta tag for searchable or not -->
  <meta name="robot" value="<?php echo $page->searchable() == 'true' ? "all" : 'noindex'; ?>">
  <title><?= $page->title() ?></title>
</head>

<body>
  <div>header</div>