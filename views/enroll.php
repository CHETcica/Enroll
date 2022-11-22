<?php

require_once  "../configs/configs.php";
require_once ROOT . "/controllers/registration.php";



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $db = Database::getInstance();
  $regisController = new Registration($db);

  try {
    $isLogin = $regisController->enroll(1);
  } catch (Exception $e) {
    echo $e->getMessage();
  }
}
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  $db = Database::getInstance();
  $regisController = new Registration($db);

  try {
    $AvailableRegister = $regisController->getAvailableRegister(1/2566, 1, 1, 1);
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
  <div class="m-auto py-3 container shadown-redius-card">
    <h1 class="">
      ลงทะเบียนผู้สมัคร
    </h1>
    <form action="" method="POST" class="p-3 bg-white rounded">
      <div>
        <h2 class="p-2 bg-ping rounded">
          ข้อมูลสาขาวิชาเเละคณะ
        </h2>

        <!-- <div class="mb-3 row">
          <div class="mb-3 col-6">
            <label for="Religion" class="form-label">คณะ</label>
            <select name="religion" id="Religion" class="form-select">
              <option value="101">วิทยาศาสตร์</option>
              <option value="102">พยาบาล</option>
              
            </select>
          </div>
          <div class="mb-3 col-6">
            <label for="BloodGroup" class="form-label">สาขาวิชา</label>
            <select name="blood_group" id="BloodGroup" class="form-select">
              <option value="45">วิศวกรรมซอฟต์แวร์</option>
              <option value="46">เทคโนโลยี</option>
            </select>
          </div>
        </div> -->
        <div class="mb-3 row">
          <div class="mb-3 col-sm-12 col-md-6 col-lg-3">
            <label for="universityYear" class="form-label">ปีที่เข้าศึกษา</label>
            <select name="universityYear" id="universityYear" class="form-select">
              <option value="1/2566">1/2566</option>
              <option value="1/2566">1/2566</option>
            </select>
          </div>
          <div class="mb-3 col-sm-12 col-md-6 col-lg-3">
            <label for="round" class="form-label">รอบที่รับสมัคร</label>
            <select name="round" id="round" class="form-select">
              <option value="1">รอบที่1</option>
              <option value="2">รอบที่2</option>
            </select>
          </div>
          <div class="mb-3 col-sm-12 col-md-6 col-lg-3">
            <label for="type" class="form-label">ประเภท</label>
            <select name="type" id="type" class="form-select">
              <option value="1">ทั่วไป</option>

            </select>
          </div>
          <div class="mb-3 col-sm-12 col-md-6 col-lg-3">
            <label for="degree" class="form-label">ปริญญา</label>
            <select name="degree" id="degree" class="form-select">
              <option value="1">ปริญญาตรี</option>
            </select>
          </div>
        </div>
        <table class="container table table-striped shadown-redius-card">
          <thead>
            <tr>
              <th scope="col "></th>
              <th scope="col py-auto">ชื่อสาขา</th>
              <th scope="col">คณะ</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>

            <!-- <?php
              // while($row = $AvailableRegister->fetch(PDO::FETCH_ASSOC)) {
            ?> -->
            <tr>
              <th scope="row">45</th>
              <td>วิศวกรรมซอฟต์แวร์</td>
              <td>วิทยาศาสตร์</td>
              <td><?php echo $row['']?></td>
              <td>
                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                  <button type="button" class="btn btn-success">สมัคร</button>
                </div>
              </td>
            </tr>
            <!-- <?php
            // }
            ?> -->
          </tbody>
        </table>
      </div>
      <button type="submit" class="btn btn-primary">ลงทะเบียน</button>
    </form>
    <div>

</body>

</html>