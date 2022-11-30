<?php
require "../data/datas.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Booking</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
</head>

<body>
  <header>
    <?php include "../component/navbar.php" ?>
  </header>
  <!-- end of header ( dont change it ) -->

  <main>
    <div class="container-fluid">
      <h3 class="mt-4 text-center fw-semibold">Rent your car now!</h3>

      <div class="row p-5">
        <div class="col-md-6">
          <?php if (isset($_GET['image'])) : ?>
          <img src="../img/<?= $_GET['image'] ?>.jpeg" class="img-fluid">
          <?php else : ?>
          <img src="../img/spider.jpeg" class="img-fluid">
          <?php endif; ?>
        </div>

        <div class="col-md-6">
          <form action="mybooking.php" method="POST">
            <input type="hidden" class="form-control" id="bookingId" name="bookingId" value="<?= rand() ?>">

            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <?php if (isset($_GET['guest'])) : ?>
              <input type="text" class="form-control" id="name" name="name" value="<?= $_GET['guest'] ?>" readonly>

              <?php else : ?>
              <input type="text" class="form-control" id="name" name="name" value="" required>
              <?php endif ?>
            </div>

            <div class="mb-3">
              <label for="date" class="form-label">Book Date</label>
              <input type="date" class="form-control" id="date" name="date" required>
            </div>

            <div class="mb-3">
              <label for="time" class="form-label">Start Time</label>
              <input type="time" class="form-control" id="time" name="time" required>
            </div>

            <div class="mb-3">
              <label for="days" class="form-label">Duration(Days)</label>
              <input type="number" class="form-control" id="days" name="days" required>
            </div>

            <div class="mb-3">
              <label for="carType" class="form-label">Car Type</label>
              <select class="form-select form-select mb-3" id="carType" name="carType">
                <?php if (isset($_GET['name'])) : ?>
                <option value="<?= $_GET["name"] ?>"><?= $_GET["name"] ?></option>
                <input type="hidden" class="form-control" id="harga" name="harga" value="<?= $_GET['harga'] ?>">
                <?php else : ?>
                <?php foreach ($datas as $data) : ?>
                <option value="<?= $data['name'] ?>"><?= $data['name']; ?></option>
                <?php endforeach; ?>
                <?php endif; ?>
              </select>
            </div>



            <div class="mb-3">
              <label for="phone" class="form-label">Phone Number</label>
              <input type="text" class="form-control" id="phone" name="phone" required>
            </div>

            <div class="services">
              <p class="p-0">Add Service(s)</p>
              <div class="mb-3 form-check">
                <div>
                  <input type="checkbox" class="form-check-input" id="health" name="services[]" value="Health Protocol">
                  <label class="form-check-label" for="health">Health protocol / Rp 25.000</label>
                </div>
                <div>
                  <input type="checkbox" class="form-check-input" id="driver" name="services[]" value="Driver">
                  <label class="form-check-label" for="driver">Driver / Rp 100.000</label>
                </div>
                <div>
                  <input type="checkbox" class="form-check-input" id="fuel" name="services[]" value="Fuel Filled">
                  <label class="form-check-label" for="fuel">Fuel filled / Rp 250.000</label>
                </div>
              </div>
            </div>


            <div class="d-grid gap-2">
              <button class="btn btn-primary" type="submit" name="submit">Booking</button>
            </div>
          </form>
        </div>
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