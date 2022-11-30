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
    <?php include "../component/navbar.php" ?>
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
                  <a href="booking.php?guest=Muhammad Nurul Afif Maliki&image=<?= $data['image']; ?>&name=<?= $data['name'] ?>&harga=<?= $data['harga'] ?>&"
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
    <?php include "../component/footer.php" ?>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
  </script>
</body>

</html>