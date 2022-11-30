<?php
require "../data/datas.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg bg-dark">
      <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-flex justify-content-center " id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link text-light fw-semibold" href="home.php">Home</a>
            <a class="nav-link text-light fw-semibold" href="booking.php">Booking</a>
          </div>
        </div>
      </div>
    </nav>
  </header>
  <!-- end of header ( dont change it ) -->

  <main>
    <div class="container">
      <div class="text-center mt-5">
        <h3 class="mb-4">WELCOME TO EAD RENT</h3>
        <p>Find your best deal, here!</p>
      </div>
      <div class="row justify-content-center my-5">
        <?php foreach ($datas as $data) : ?>
        <div class="col">
          <div class="card" style="width: 18rem;">

            <div class="position-relative">
              <img src="../img/<?= $data['image']; ?>.jpeg" class="card-img-top" alt="<?= $data['name'] ?>">
              <div class="card-body position-absolute bottom-0">
                <h5 class="card-title fw-semibold text-light"><?= $data['name'] ?></h5>
                <p class="card-text text-secondary">Rp <?= $data['harga'] ?> / Day</p>
              </div>
            </div>
            <ul class="list-group list-group-flush text-center fw-semibold ">
              <li class="list-group-item text-primary"><?= $data["kursi"] ?> Kursi</li>
              <li class="list-group-item text-primary"><?= $data["power"] ?> CC</li>
              <li class="list-group-item text-primary"><?= $data["type"] ?></li>
              <li class="list-group-item p-0">
                <div class="card-body bg-primary py-4 text-dark bg-opacity-10 d-flex justify-content-center">
                  <a href="Afif_booking.php?guest=Muhammad Nurul Afif Maliki&image=<?= $data['image']; ?>&name=<?= $data['name'] ?>&harga=<?= $data['harga'] ?>&"
                    class="btn btn-primary">Book Now</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>

  </main>

  <footer>
    <div class="navbar navbar-expand-lg bg-light text-dark">
      <div class="container d-flex justify-content-center ">
        <p class="fw-semibold">Created by MUHAMMAD NURUL AFIF MALIKI_1202202052</p>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
  </script>
</body>

</html>