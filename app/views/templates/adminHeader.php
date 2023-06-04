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
   
    <nav class="navbar navbar-expand-lg sticky-top p-4 navbar-light bg-white navbar-tp">
        <div class="container">
            <a href="<?=BASEURL?>/admin" class="text-decoration-none"><h3 class="text-black">HaloDek<span class="fs-5 text-warning">Admin </span></h3></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav  mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="<?=BASEURL?>/admin/dokter">dokter</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?=BASEURL?>/user">user</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="<?=BASEURL?>/appointment">appointment</a>
              </li>
            </ul>
          </div>
          <div class="">
            <a class="dropdown-item" href="<?=BASEURL?>/logout/signoutadmin">Logout</a>
          </div>
        </div>
      </nav>