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
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>

<body>
    <?php
    include "../component/navbar.php";
    ?>
    <div class="mx-auto pb-3 container bg-secondary rounded">
        <h1>
            ลงทะเบียนผู้สมัคร
        </h1>
        <form class="p-3 bg-white rounded">
            <div>
                <h2 class="p-2 bg-danger rounded">
                    ข้อมูลส่วนบุคคล
                </h2>
                <div class="mb-3">
                    <label for="NationalitySelect" class="form-label">สัญชาติ</label>
                    <select id="NationalitySelect" class="form-select">
                        <option>ไทย</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="Inputid" class="form-label">เลขประจำตัวประชาชน</label>
                    <input type="text" class="form-control" id="Inputid">
                </div>
                <div class="mb-3">
                    <label for="InputEmail1" class="form-label">อีเมลที่สามารถติดต่อได้</label>
                    <input type="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">เราจะไม่แบ่งปันอีเมลของคุณกับผู้อื่น</div>
                </div>
                <div class="mb-3">
                    <label for="PrefixSelect" class="form-label">คำนำหน้า</label>
                    <select id="PrefixSelect" class="form-select">
                        <option>นาย</option>
                        <option>นางสาว</option>
                    </select>
                </div>
                <div class="mb-3 row">
                    <div class="mb-3 col-6">
                        <label for="InputFristNameTH" class="form-label">ชื่อ</label>
                        <input type="text" class="form-control" id="InputFristNameTH">
                    </div>
                    <div class="mb-3 col-6">
                        <label for="InputLastNameTH" class="form-label">นามสกุล</label>
                        <input type="text" class="form-control" id="InputLastNameTH">
                    </div>
                </div>
                <div class="mb-3 row">
                    <div class="mb-3 col-6">
                        <label for="InputFristNameEN" class="form-label">ชื่อภาษาอังกฤษ</label>
                        <input type="text" class="form-control" id="InputFristNameEN">
                    </div>
                    <div class="mb-3 col-6">
                        <label for="InputLastNameEN" class="form-label">นามสกุลภาษาอังกฤษ</label>
                        <input type="text" class="form-control" id="InputLastNameEN">
                    </div>
                </div>
                <div class="mb-3 row">
                    <div class="mb-3 col-6">
                        <label for="InputBorn" class="form-label">วันเดือนปีเกิด</label>
                        <input type="Date" class="form-control" id="InputBorn">
                    </div>
                    <div class="mb-3 col-6">
                        <label for="InputLastNameEN" class="form-label">ภูมิลำเนาเดิมจังหวัด</label>
                        <select id="InputLastNameEN" class="form-select">
                            <option>นครปฐม</option>
                            <option>สุพรรณบุรี</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <div class="mb-3 col-6">
                        <label for="Ethnicity" class="form-label">เชื้อชาติ</label>
                        <select id="Ethnicity" class="form-select">
                            <option>ไทย</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <div class="mb-3 col-6">
                        <label for="Religion" class="form-label">ศาสนา</label>
                        <select id="Religion" class="form-select">
                            <option>นครปฐม</option>
                            <option>สุพรรณบุรี</option>
                        </select>
                    </div>
                    <div class="mb-3 col-6">
                        <label for="BloodGroup" class="form-label">หมู่โลหิต</label>
                        <select id="BloodGroup" class="form-select">
                            <option>A</option>
                            <option>B</option>
                            <option>O</option>
                            <option>AB</option>
                        </select>
                    </div>
                </div>
            </div>
            <div>
                <h2 class="p-2 bg-danger rounded">
                    ข้อมูลส่วนบุคคล
                </h2>
                <div class="mb-3">
                    <label for="address" class="form-label">บ้านเลขที่</label>
                    <input type="text" class="form-control" id="address">
                </div>

            </div>
            <button type="submit" class="btn btn-primary">ลงทะเบียน</button>
        </form>
        <div>
</body>

</html>