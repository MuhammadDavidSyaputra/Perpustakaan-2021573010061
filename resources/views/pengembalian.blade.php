<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Perpustakaan</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body style="height: 3000px">
  <!-- Header-->
  <nav class="navbar navbar-expand navbar-dark bg-primary sticky-top">
    <div class="container-lg">
      <a class="navbar-brand" href="."><i class="bi bi-bank"></i> Perpustakaan</a>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            </a>
            <ul class="dropdown-menu dropdown-menu-end mt-2">
              <li><a class="dropdown-item" href="#"><i class="bi bi-person-circle"></i> Profile</a></li>
              <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#ModalUbahPassword"><i class="bi bi-key"></i> Ubah Password</a></li>
              <li><a class="dropdown-item" href="logout"><i class="bi bi-box-arrow-left"></i> Logout</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Header-->
  <div class="container-lg">
    <div class="row">
      <!--Sidebar-->
      <div class="col-lg-3">
        <nav class="navbar navbar-expand-lg rounded border mt-2">
          <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel" style="width:200px;">
              <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
              <div class="offcanvas-body">
                <ul class="navbar-nav nav-pills flex-column justify-content-end flex-grow-1">
                  <li class="nav-item">
                    <a class="nav-link active link-light" aria-current="page" href="main"> <i class="bi bi-house-fill"></i>
                      Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="buku"><i class="bi bi-book"> </i>Buku</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="peminjam"><i class="bi bi-journal-bookmark-fill"></i> Peminjam</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pengembalian"><i class="bi bi-journal-check"></i> Pengembalian</a>
                  </li>

                </ul>

              </div>
            </div>
          </div>
        </nav>
      </div>
      <!--End Sidebar-->

      <!-- Content-->
      <div class="col-lg-9 mt-2">
        <div class="card-group">
          <div class="card">
            <img src="img/teras.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk
                of the card's content.</p>

              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>

          <div class="card">
            <img src="img/sebuah seni.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk
                of the card's content.</p>

              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>

          <div class="card">
            <img src="img/filosofi kopi.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk
                of the card's content.</p>

              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>

        </div>
      </div>
      <!-- End Content-->

      <div class="fixed-bottom text-center bg-light py-3">
        Copyright 2022 David Syaputra
      </div>

    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>