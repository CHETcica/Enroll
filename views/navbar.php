<?
  session_start();
  $user = "";
?>
<nav class="mb-3 navbar navbar-expand-lg  sticky-top shadown-redius-card">
    <div class="container">
      <a class="navbar-brand" href="/Enroll/views/"><img style="height: 50px;" src="./img/ตราสัญลักษณ์ประจำมหาวิทยาลัยราชภัฏพระนคร.png" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/Enroll/views/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./regis.php">ลงทะเบียนเข้าใช้ระบบ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./login.php">เข้าสู่ระบบ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./enroll.php">สมัครเข้าศึกษาต่อ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./dashboard.php">แผงควบคุม</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href=""><?php
                
                if($_SESSION["id"]){
                  $user = $_SESSION["id"];
                }
                echo $user;
            ?></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
