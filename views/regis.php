<?php

require_once  "../configs/configs.php";
require_once ROOT . "/controllers/registration.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $db = Database::getInstance();
    $regisController = new Registration($db);

    try {
        $regisController->regis($_POST);
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
                    ข้อมูลส่วนบุคคล
                </h2>
                <div class="mb-3">
                    <label for="NationalitySelect" class="form-label">สัญชาติ</label>
                    <select name="nationality" id="NationalitySelect" class="form-select">
                        <option value="ไทย">ไทย</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="Inputid" class="form-label">เลขประจำตัวประชาชน</label>
                    <input name="national_id" type="text" class="form-control" id="Inputid">
                </div>
                <div class="mb-3">
                    <label for="InputEmail1" class="form-label">อีเมลที่สามารถติดต่อได้</label>
                    <input name="email" type="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">เราจะไม่แบ่งปันอีเมลของคุณกับผู้อื่น</div>
                </div>
                <div class="mb-3">
                    <label for="PrefixSelect" class="form-label">คำนำหน้า</label>
                    <select name="prefix" id="PrefixSelect" class="form-select">
                        <option value="นาย">นาย</option>
                        <option value="นางสาว">นางสาว</option>
                    </select>
                </div>
                <div class="mb-3 row">
                    <div class="mb-3 col-6">
                        <label for="InputFristNameTH" class="form-label">ชื่อ</label>
                        <input name="firstname_th" type="text" class="form-control" id="InputFristNameTH">
                    </div>
                    <div class="mb-3 col-6">
                        <label for="InputLastNameTH" class="form-label">นามสกุล</label>
                        <input name="lastname_th" type="text" class="form-control" id="InputLastNameTH">
                    </div>
                </div>
                <div class="mb-3 row">
                    <div class="mb-3 col-6">
                        <label for="InputFristNameEN" class="form-label">ชื่อภาษาอังกฤษ</label>
                        <input name="firstname_en" type="text" class="form-control" id="InputFristNameEN">
                    </div>
                    <div class="mb-3 col-6">
                        <label for="InputLastNameEN" class="form-label">นามสกุลภาษาอังกฤษ</label>
                        <input name="lastname_en" type="text" class="form-control" id="InputLastNameEN">
                    </div>
                </div>
                <div class="mb-3 row">
                    <div class="mb-3 col-6">
                        <label for="InputBorn" class="form-label">วันเดือนปีเกิด</label>
                        <input name="birthday" type="Date" class="form-control" id="InputBorn">
                    </div>
                    <div class="mb-3 col-6">
                        <label for="original_province" class="form-label">ภูมิลำเนาเดิมจังหวัด</label>
                        <select name="original_province"  id="original_province" class="form-select">
                            <option value="นครปฐม">นครปฐม</option>
                            <option value="สุพรรณบุรี">สุพรรณบุรี</option>
                            <option value="สมุทรสาคร">สมุทรสาคร</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <div class="mb-3 col-6">
                        <label for="Ethnicity" class="form-label">เชื้อชาติ</label>
                        <select name="race" id="Ethnicity" class="form-select">
                            <option>ไทย</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <div class="mb-3 col-6">
                        <label for="Religion" class="form-label">ศาสนา</label>
                        <select name="religion" id="Religion" class="form-select">
                            <option value="พุทธ">พุทธ</option>
                            <option value="คริส">คริส</option>
                            <option value="อิสลาม">อิสลาม</option>
                        </select>
                    </div>
                    <div class="mb-3 col-6">
                        <label for="BloodGroup" class="form-label">หมู่โลหิต</label>
                        <select name="blood_group" id="BloodGroup" class="form-select">
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="O">O</option>
                            <option value="AB">AB</option>
                        </select>
                    </div>
                </div>
            </div>
            <div>
                <h2 class="p-2 bg-ping rounded">
                    ข้อมูลที่อยู่
                </h2>
                <div class="mb-3 row">
                    <div class="mb-3 col-6">
                        <label for="no" class="form-label">บ้านเลขที่</label>
                        <input name="no" type="text" class="form-control" id="no">
                    </div>
                    <div class="mb-3 col-6">
                        <label for="group_no" class="form-label">หมู่</label>
                        <input name="group_no" type="text" class="form-control" id="group_no">
                    </div>
                </div>
                <div class="mb-3 row">
                    <div class="mb-3 col-6">
                        <label for="alley" class="form-label">ซอย</label>
                        <input name="alley" type="text" class="form-control" id="alley">
                    </div>
                    <div class="mb-3 col-6">
                        <label for="street" class="form-label">ถนน</label>
                        <input name="street" type="text" class="form-control" id="street">
                    </div>
                </div>
                <div class="mb-3 row">
                    <div class="mb-3 col-6">
                        <label for="province" class="form-label">จังหวัด</label>
                        <select name="province" id="province" class="form-select">
                            <option value="นครปฐม">นครปฐม</option>
                            <option value="สุพรรณบุรี">สุพรรณบุรี</option>
                            <option value="สมุทรสาคร">สมุทรสาคร</option>
                        </select>
                    </div>
                    <div class="mb-3 col-6">
                        <label for="district" class="form-label">เขต/อำเภอ</label>
                        <input name="district" type="text" class="form-control" id="district">
                    </div>
                </div>

                <div class="mb-3 row">
                    <div class="mb-3 col-6">
                        <label for="sub_district" class="form-label">เเขวง/ตำบล</label>
                        <input name="sub_district" type="text" class="form-control" id="sub_district">
                    </div>
                    <div class="mb-3 col-6">
                        <label for="zip_code" class="form-label">รหัสไปรษณีย์</label>
                        <input name="zip_code" type="text" class="form-control" id="zip_code">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="phone_number" class="form-label">โทรศัพท์ ไม่ต้องเว้นวรรคหรือขีดขั้น</label>
                    <input name="phone_number" type="text" class="form-control" id="phone_number">
                </div>
                </>
                <button type="submit" class="btn btn-primary">ลงทะเบียน</button>
        </form>
        <div>
</body>

</html>