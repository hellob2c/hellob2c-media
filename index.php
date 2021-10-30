<!DOCTYPE html>
<html>
  <head>
    <title>Very Simple PHP gallery</title>

    <!-- (A) CSS & JS -->
    <link href="caption-gallery.css" rel="stylesheet">
    <link rel="stylesheet" href="./design1.css">
    <script src="gallery.js"></script>
  </head>
  <body>
<!-- partial:index.partial.html  START-->
<div class="cards">

  <div class="card">
    <div class="card__image-holder">

    <?php
    // (B) GET LIST OF IMAGE FILES FROM GALLERY FOLDER
    $dir = __DIR__ . DIRECTORY_SEPARATOR . "logo" . DIRECTORY_SEPARATOR;
    $images = glob($dir . "*.{jpg,jpeg,gif,png,bmp,webp}", GLOB_BRACE);

    // (C) OUTPUT IMAGES    
    foreach ($images as $i) {
      $img = basename($i);
      $caption = substr($img, 0, strrpos($img, "."));
      printf("<figure><img src='logo/%s'/><figcaption>%s</figcaption></figure>", $img, $caption);
    }
    ?>

      <img class="card__image" src="https://source.unsplash.com/300x225/?wave" alt="wave" />
    </div>
    <div class="card-title">
      <a href="#" class="toggle-info btn">
        <span class="left"></span>
        <span class="right"></span>
      </a>
      <h2>
          Card title
          <small>Image from unsplash.com</small>
      </h2>
    </div>
    <div class="card-flap flap1">
      <div class="card-description">
        This grid is an attempt to make something nice that works on touch devices. Ignoring hover states when they're not available etc.
      </div>
      <div class="card-flap flap2">
        <div class="card-actions">
          <a href="#" class="btn">Read more</a>
        </div>
      </div>
    </div>
  </div>











  <div class="card">
    <div class="card__image-holder">
      <img class="card__image" src="https://source.unsplash.com/300x225/?beach" alt="beach" />
    </div>
    <div class="card-title">
      <a href="#" class="toggle-info btn">
        <span class="left"></span>
        <span class="right"></span>
      </a>
      <h2>
          Card title
          <small>Image from unsplash.com</small>
      </h2>
    </div>
    <div class="card-flap flap1">
      <div class="card-description">
        This grid is an attempt to make something nice that works on touch devices. Ignoring hover states when they're not available etc.
      </div>
      <div class="card-flap flap2">
        <div class="card-actions">
          <a href="#" class="btn">Read more</a>
        </div>
      </div>
    </div>
  </div>

  </div>



<!-- partial:index.partial.html ENDS -->


 
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

<!-- partial -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js'></script><script  src="./design1.js"></script>



  </body>
</html>