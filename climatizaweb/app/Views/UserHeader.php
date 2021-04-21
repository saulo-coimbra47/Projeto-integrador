<!DOCTYPE html>
<html lang="pt-br">

<head>
  <!-- Meta tags Obrigatórias -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,900;1,700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

  <link rel="stylesheet" href="../public/css/bootstrap.min.css">
  <link rel="stylesheet" href="../public/css/main.css">
  <!-- FONTAWESOME -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <script src="https://kit.fontawesome.com/1ab94d0eba.js" crossorigin="anonymous"></script>
  
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

  <title></title>
</head>

<body class="d-flex flex-column">
  <!--MENU--->
  <div class="container-fluid">
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-blue">
      <a class="navbar-brand" href="#">
        <img src="img/logoiicon.png" class="img-fluid" width="190" height="35">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div class="col align-self-center">
          <div class="row">
            <div class="col-9">
              <form id="formSearch" class="d-flex">
                <input class="form-control me-4" name="Search" id="Search" type="search" placeholder="Busque uma cidade..." style="width: 50vh; margin-left: 23vw;">
                <a class="search-btn" type="submit" href="#" style="padding-left: 0.5vw; padding-top: 1vh;">
                  <i class="fas fa-search"></i>
                </a>
              </form>
            </div>
          </div>
        </div>
        <div class="col-1">
          <a href="<?= base_url('userprofile') ?>" class="lgnbtn" style="text-decoration: none;">
            <i class="fa fa-user-circle"></i>
            <span class="txtbtn-lgn">
              Perfil
            </span>
          </a>
        </div>

        <div class="col-1.5">
          <a href="<?= base_url('logout') ?>" class="lgnbtn" style="text-decoration: none;">
            <i class="fa fa-user-circle"></i>
            <span class="txtbtn-lgn">
              Sair
            </span>
          </a>
        </div>

      </div>
    </nav>
  </div>