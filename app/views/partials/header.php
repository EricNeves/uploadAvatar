<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="shortcut icon" href="<?php echo BASE_URL; ?>public/images/icon.png" type="image/png" />

  <title><?php echo $title; ?></title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,600;1,500&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>public/css/main.css" />
</head>

<body>

  <header>
    <div class="container">
      <div class="brand">
        <a href="./">
          Upload <i class="fa-solid fa-cloud-arrow-up"></i>
        </a>
      </div>

      <nav>
        <li>
          <a href="javascript:void(0)" id="open__dropdown">
            <i class="fa-solid fa-chevron-down"></i>
          </a>
        </li>

        <ul class="dropdown">
          <a href="./">
            <li>
              <span>Home</span>
              <i class="fa-solid fa-house"></i>
            </li>
          </a>
          <a href="./avatars">
            <li>
              <span>Avatars</span>
              <i class="fa-solid fa-folder-open"></i>
            </li>
          </a>
        </ul>
      </nav>
    </div>
  </header>

  <main>