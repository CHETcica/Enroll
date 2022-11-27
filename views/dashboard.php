<?php

require_once  "../configs/configs.php";
require_once ROOT . "/controllers/registration.php";

$studenList = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $db = Database::getInstance();
  $regisController = new Registration($db);

  try {
    $isLogin = $regisController->enroll($_POST);
  } catch (Exception $e) {
    echo $e->getMessage();
  }
}

function accept($id)
{
  $db = Database::getInstance();
  $regisController = new Registration($db);
  try {
    $isLogin = $regisController->updateIsApprove('1700401323201', '1');
    var_dump($isLogin);
  } catch (Exception $e) {
    echo $e->getMessage();
  }
}
function decline($id)
{
  $db = Database::getInstance();
  $regisController = new Registration($db);
  try {
    $isLogin = $regisController->updateIsApprove($id , 0);
  } catch (Exception $e) {
    echo $e->getMessage();
  }
}
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  $db = Database::getInstance();
  $regisController = new Registration($db);

  try {
    $studenList = $regisController->getAllEnroll();
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
  <table class="container table table-striped shadown-redius-card">
    <thead>
      <tr>

        <th scope="col">ชื้อ</th>
        <th scope="col">สาขา</th>
        <th scope="col">สถานะ</th>
        <th scope="col">การตอบกลับ</th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($studenList as $studen) {
      ?>
        <tr>

          <td><?= $studen['fname'] ?></td>
          <td><?= $studen['major'] ?></td>
          <td><?php if ($studen['is_approve'] == 0) {
                echo "ยังไม่ยืนยัน";
              } else {
                echo "ยืนยันแล้ว";
              } ?></td>
          <td>
            <form action="dashboard.php" class="btn-group" role="group">
              <button type="submit" onclick="accept('1700401323201')" class="btn btn-success">ยอมรับ</button>
              <button type="submit" onclick="decline(<?= $studen['id'] ?>)" class="btn btn-danger">ปฏิเสธ</button>
            </form>
          </td>
        </tr>
      <?php
      }
      ?>

    </tbody>
  </table>
</body>

</html>