<?php
require "../data/datas.php";

// variable
$harga = 0;
$services = [];
$deadline = 0;
$tanggal_mengembalikan = null;

if (isset($_POST['submit'])) {
  if (isset($_POST['bookingId'])) {
    foreach ($datas as $data) {
      if ($_POST['carType'] === $data['name']) {
        if ($_POST['days'] >= 1) {
          $harga = $data['harga'] * $_POST['days'];
        }
      };
    };

    $tanggal_mengembalikan = date("Y-m-d", strtotime('+' . $_POST['days'] . 'days', strtotime($_POST['date'])));
  };

  if (!empty($_POST['services'])) {
    foreach ($_POST['services'] as $service) {
      array_push($services, $service);

      switch ($service) {
        case 'Health Protocol':
          $harga += 25000;
          break;

        case 'Driver':
          $harga += 100000;
          break;

        case 'Fuel Filled':
          $harga += 250000;
          break;

        default:
          $harga += 0;
          break;
      }
    }
  }
}
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
    <div class="container-fluid">
      <div class="my-5 text-center fw-semibold">
        <h3>Thank You Muhammad Nurul Afif Maliki For Reserving</h3>
        <p>Please double check your reservasion details</p>
      </div>

      <div>
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">Booking Number</th>
              <th scope="col">Name</th>
              <th scope="col">Check In</th>
              <th scope="col">Check Out</th>
              <th scope="col">Car Type</th>
              <th scope="col">Phone Number</th>
              <th scope="col">Service(s)</th>
              <th scope="col">Total Price</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><?= $_POST['bookingId'] ?></td>
              <td><?= $_POST['name'] ?></td>
              <td><?= $_POST['date'] ?> <?= $_POST['time'] ?></td>
              <td><?= $tanggal_mengembalikan ?> <?= $_POST['time'] ?></td>
              <td><?= $_POST['carType'] ?></td>
              <td><?= $_POST['phone'] ?></td>
              <td>
                <?php if (!empty($services)) : ?>
                <ul>
                  <?php foreach ($services as $service) : ?>
                  <?php if (!empty($service)) : ?>
                  <li><?= $service; ?></li>
                  <?php endif; ?>
                  <?php endforeach; ?>
                </ul>

                <?php else : ?>
                <p>No Services</p>
                <?php endif; ?>

              </td>
              <td>Rp <?= number_format($harga, 2, ",", "."); ?></td>
            </tr>
          </tbody>

        </table>
      </div>
    </div>
  </main>

  <footer>
    <div class="navbar navbar-expand-lg bg-light text-dark position-absolute w-100 bottom-0">
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