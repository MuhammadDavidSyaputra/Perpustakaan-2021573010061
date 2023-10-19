<?php
include "proses/connect.php";
$query = mysqli_query($conn, "SELECT * FROM tb_tiket
LEFT JOIN tb_counter ON tb_counter.id_counter = tb_tiket.counter");
while ($record = mysqli_fetch_array($query)) {
    $result[] = $record;
}

$select_counter = mysqli_query($conn, "SELECT id_counter,nama_counter FROM tb_counter");
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.104.2">
  <title>Checkout example · Bootstrap v5.2</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    .b-example-divider {
      height: 3rem;
      background-color: rgba(0, 0, 0, .1);
      border: solid rgba(0, 0, 0, .15);
      border-width: 1px 0;
      box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    .b-example-vr {
      flex-shrink: 0;
      width: 1.5rem;
      height: 100vh;
    }

    .bi {
      vertical-align: -.125em;
      fill: currentColor;
    }

    .nav-scroller {
      position: relative;
      z-index: 2;
      height: 2.75rem;
      overflow-y: hidden;
    }

    .nav-scroller .nav {
      display: flex;
      flex-wrap: nowrap;
      padding-bottom: 1rem;
      margin-top: -1px;
      overflow-x: auto;
      text-align: center;
      white-space: nowrap;
      -webkit-overflow-scrolling: touch;
    }
  </style>


  <!-- Custom styles for this template -->
  <link href="assets/css/form-validation.css" rel="stylesheet">
</head>

<body class="bg-light">

  <div class="container">
    <main>
      <div class="py-5 text-center">
        <i class="bi bi-car-front-fill fs-1"></i>
        <h2>pinjam buku</h2>
        <p class="lead">Pastikan buku yang benar</p>
      </div>

      <div class="row g-5">
        <div class="col-md-5 col-lg-4 order-md-last">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-primary">Total buku yang di pinjam</span>
            <span class="badge bg-primary rounded-pill">3</span>
          </h4>

          <form class="card p-2">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Promo code">
              <button type="submit" class="btn btn-secondary">Redeem</button>
            </div>
          </form>
        </div>
        <div class="col-md-7 col-lg-8">
          <h4 class="mb-3">Checkout Tiket</h4>
          <form class="needs-validation" novalidate action="proses/proses_checkout.php" method="POST" enctype="multipart/form-data">
            <div class="row g-3">
              <div class="col-sm-12">
                <label for="firstName" class="form-label">Masukkan Nama Anda</label>
                <input type="text" class="form-control" id="firstName" placeholder="" name="nama_penumpang" required>
                <div class="invalid-feedback">
                  Harap Masukkan Nama Anda
                </div>
              </div>

              <div class="col-12">
                <label for="email" class="form-label">Email <span class="text-muted">(Optional)</span></label>
                <input type="email" class="form-control" id="email" placeholder="you@example.com">
                <div class="invalid-feedback">
                  Please enter a valid email address
                </div>
              </div>

              <div class="col-12">
                <label for="address" class="form-label">Tujuan Awal</label>
                <input type="text" class="form-control" id="address" placeholder="Kota Tujuan" name="tujuan_awal" required>
                <div class="invalid-feedback">
                  Masukkan buku yang dipinjam
                </div>
              </div>


              <div class="col-md-5">
                <label for="country" class="form-label">Loket</label>
                <select class="form-select" id="country" name="counter" required>
                  <option value="">Choose...</option>
                  <?php
                  foreach ($select_counter as $value) {
                    echo "<option value=" . $value['id_counter'] . ">$value[nama_counter]</option>";
                  }
                  ?>
                </select>
                <div class="invalid-feedback">
                  Pilih buku yang  anda inginkan
                </div>
              </div>

              <div class="col-md-4">
                <label for="state" class="form-label">No Hp</label>
                <input type="text" class="form-control" id="zip" placeholder="" name="nohp" required>
                <div class="invalid-feedback">
                  Masukkan No Hp
                </div>
              </div>

              <div class="col-md-3">
                <label for="zip" class="form-label">Jumlah Penumpang</label>
                <input type="text" class="form-control" id="zip" placeholder="" name="jumlah_penumpang" required>
                <div class="invalid-feedback">
                  Masukkan Jumlah buku
                </div>
              </div>
            </div>

            <hr class="my-4">

            <button class="w-100 btn btn-primary btn-lg" type="submit" value="12345" name="input_checkout_validate">Continue to checkout</button>
          </form>
        </div>
      </div>
    </main>

    <footer class="my-5 pt-5 text-muted text-center text-small">
      <p class="mb-1">&copy; 2017–2022 Company Name</p>
      <ul class="list-inline">
        <li class="list-inline-item"><a href="#">Privacy</a></li>
        <li class="list-inline-item"><a href="#">Terms</a></li>
        <li class="list-inline-item"><a href="#">Support</a></li>
      </ul>
    </footer>
  </div>


  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

  <script src="form-validation.js"></script>
</body>

</html>