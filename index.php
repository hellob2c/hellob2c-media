<!DOCTYPE html>
<html>
  <head>
    <title>Very Simple PHP gallery</title>

    <!-- (A) CSS & JS -->
    <link href="caption-gallery.css" rel="stylesheet">
    <script src="gallery.js"></script>
  </head>
  <body>
    <div class="gallery"><?php
    // (B) GET LIST OF IMAGE FILES FROM GALLERY FOLDER
    $dir = __DIR__ . DIRECTORY_SEPARATOR . "logo" . DIRECTORY_SEPARATOR;
    $images = glob($dir . "*.{jpg,jpeg,gif,png,bmp,webp}", GLOB_BRACE);

    // (C) OUTPUT IMAGES    
    foreach ($images as $i) {
      $img = basename($i);
      $caption = substr($img, 0, strrpos($img, "."));
      printf("<figure><img src='logo/%s'/><figcaption>%s</figcaption></figure>", $img, $caption);
    }
    ?></div>


<p> Clients </p>

    <div class="gallery"><?php
    // (B) GET LIST OF IMAGE FILES FROM GALLERY FOLDER
    $dir = __DIR__ . DIRECTORY_SEPARATOR . "clients" . DIRECTORY_SEPARATOR;
    $images = glob($dir . "*.{jpg,jpeg,gif,png,bmp,webp}", GLOB_BRACE);

    // (C) OUTPUT IMAGES    
    foreach ($images as $i) {
      $img = basename($i);
      $caption = substr($img, 0, strrpos($img, "."));
      printf("<figure><img src='clients/%s'/><figcaption>%s</figcaption></figure>", $img, $caption);
    }
    ?></div>

<p> portfolio</p>

    <div class="gallery"><?php
    // (B) GET LIST OF IMAGE FILES FROM GALLERY FOLDER
    $dir = __DIR__ . DIRECTORY_SEPARATOR . "portfolio" . DIRECTORY_SEPARATOR;
    $images = glob($dir . "*.{jpg,jpeg,gif,png,bmp,webp}", GLOB_BRACE);

    // (C) OUTPUT IMAGES    
    foreach ($images as $i) {
      $img = basename($i);
      $caption = substr($img, 0, strrpos($img, "."));
      printf("<figure><img src='portfolio/%s'/><figcaption>%s</figcaption></figure>", $img, $caption);
    }
    ?></div>

<p> mockups</p>

    <div class="gallery"><?php
    // (B) GET LIST OF IMAGE FILES FROM GALLERY FOLDER
    $dir = __DIR__ . DIRECTORY_SEPARATOR . "mockups" . DIRECTORY_SEPARATOR;
    $images = glob($dir . "*.{jpg,jpeg,gif,png,bmp,webp}", GLOB_BRACE);

    // (C) OUTPUT IMAGES    
    foreach ($images as $i) {
      $img = basename($i);
      $caption = substr($img, 0, strrpos($img, "."));
      printf("<figure><img src='mockups/%s'/><figcaption>%s</figcaption></figure>", $img, $caption);
    }
    ?></div>

<p> team</p>

<div class="gallery"><?php
// (B) GET LIST OF IMAGE FILES FROM GALLERY FOLDER
$dir = __DIR__ . DIRECTORY_SEPARATOR . "team" . DIRECTORY_SEPARATOR;
$images = glob($dir . "*.{jpg,jpeg,gif,png,bmp,webp}", GLOB_BRACE);

// (C) OUTPUT IMAGES    
foreach ($images as $i) {
  $img = basename($i);
  $caption = substr($img, 0, strrpos($img, "."));
  printf("<figure><img src='team/%s'/><figcaption>%s</figcaption></figure>", $img, $caption);
}
?></div>

<p> testimonials</p>

    <div class="gallery"><?php
    // (B) GET LIST OF IMAGE FILES FROM GALLERY FOLDER
    $dir = __DIR__ . DIRECTORY_SEPARATOR . "testimonials" . DIRECTORY_SEPARATOR;
    $images = glob($dir . "*.{jpg,jpeg,gif,png,bmp,webp}", GLOB_BRACE);

    // (C) OUTPUT IMAGES    
    foreach ($images as $i) {
      $img = basename($i);
      $caption = substr($img, 0, strrpos($img, "."));
      printf("<figure><img src='testimonials/%s'/><figcaption>%s</figcaption></figure>", $img, $caption);
    }
    ?></div>

<p> New</p>

    <div class="gallery"><?php
    // (B) GET LIST OF IMAGE FILES FROM GALLERY FOLDER
    $dir = __DIR__ . DIRECTORY_SEPARATOR . "new" . DIRECTORY_SEPARATOR;
    $images = glob($dir . "*.{jpg,jpeg,gif,png,bmp,webp}", GLOB_BRACE);

    // (C) OUTPUT IMAGES    
    foreach ($images as $i) {
      $img = basename($i);
      $caption = substr($img, 0, strrpos($img, "."));
      printf("<figure><img src='new/%s'/><figcaption>%s</figcaption></figure>", $img, $caption);
    }
    ?></div>

  </body>
</html>