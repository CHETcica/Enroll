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
        <th scope="col "></th>
        <th scope="col py-auto">คำนำหน้า</th>
        <th scope="col">ชื้อ</th>
        <th scope="col">นามสกุล</th>
        <th scope="col">อีเมลที่สามารถติดต่อได้</th>
        <th scope="col">การตอบกลับ</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>นาย</td>
        <td>เจษฎากร</td>
        <td>เมืองนาม</td>
        <td>624259008@webmail.npru.ac.th</td>
        <td>
          <div class="btn-group" role="group" aria-label="Basic mixed styles example">
            <button type="button" class="btn btn-success">ยอมรับ</button>
            <button type="button" class="btn btn-danger">ปฏิเสธ</button>

          </div>
        </td>
      </tr>
      
    </tbody>
  </table>
</body>

</html>