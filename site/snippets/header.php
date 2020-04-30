<!DOCTYPE html>
<html lang="en">

<head>
  <?php echo $site->google() ?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- adds meta tag for searchable or not -->
  <meta name="robot" value="<?php echo $page->searchable() == 'true' ? "all" : 'noindex'; ?>">
  <?= css('assets/css/index.css') ?>
  <meta name="title" value="<?php echo $page->metatitle() ?>">
  <meta name="description" value="<?php echo $page->metadescription() ?>">
  <title><?= $page->title() ?></title>
  <?php echo $site->facebook() ?>
</head>

<body>