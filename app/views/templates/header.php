<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['title']; ?></title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= BASEURL?>/assets/style/main.css" type="text/css">

    <!-- Import fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600&display=swap" rel="stylesheet">
</head>
<body>
   
    <nav class="navbar navbar-expand-lg sticky-top navbar-light bg-white navbar-tp">
        <div class="container">
            <a href="<?=BASEURL?>" class="text-decoration-none"><h3 class="text-black">HaloDek</h3></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav  mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">Features</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Stories</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="#">Premium</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
              </li>
            </ul>
          </div>
          <?php if ($_SESSION['session_login'] === 'sudah_login') :?>
            <div class="dropdown">
              <button class="btn btn-nav-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
              </svg>
              </button>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="<?=BASEURL?>/logout/signout">Logout</a>
                </li>
              </ul>
            </div>
            <?php else: ?>
              <div class="navbar-nav">
              <a href="<?= BASEURL?>/user/tambah"  class="btn-nav-primary text-decoration-none me-3">Sign up</a>
              <a href="<?= BASEURL?>/login" class="btn-nav-secondary text-decoration-none">Log in</a>
              </div>
          <?php endif ?>
          
        </div>
      </nav>