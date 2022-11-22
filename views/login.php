<?php

require_once  "../configs/configs.php";
require_once ROOT . "/controllers/registration.php";


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $db = Database::getInstance();
  $regisController = new Registration($db);

  try {
    $isLogin = $regisController->login($_POST["national_id"], $_POST["password"]);
    if ($isLogin) echo "Logged in";
    else {
      session_destroy();
      echo "Not Login";
    }
  } catch (Exception $e) {
    echo $e->getMessage();
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./index.css">
  <title>Document</title>
</head>

<body>
  <?php
  include "navbar.php";
  ?>
  <div class="container m-auto row ">
    <div class="m-auto shadown-redius-card  col-4">
      <h1>
        ลงชื่อเข้าใช้
      </h1>
      <form action="" method="POST" class="mb-3 p-3 bg-white rounded">
        <div class="">
          <div class="mb-3">
            <label for="national_id" class="form-label">National id</label>
            <input name="national_id" type="text" class="form-control" id="national_id" >
            <div id="emailHelp" class="form-text">We'll never share your national id with anyone else.</div>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input name="password" type="password" class="form-control" id="exampleInputPassword1">
          </div>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      <div>
      </div>

</body>

</html>