<?php

require_once ROOT . "/models/user.php";
require_once ROOT . "/models/address.php";
require_once ROOT . "/models/open_register.php";
require_once ROOT . "/models/user_history_education.php";
require_once ROOT . "/models/user_register.php";

class Registration
{
  private $db;
  private  $address;
  private  $user;
  private $openRegister;
  private $historyEducation;
  private $userRegister;

  function __construct($db)
  {
    $this->db = $db;
    $this->address = new Address($this->db);
    $this->user = new User($this->db);
    $this->openRegister = new OpenRegister($this->db);
    $this->historyEducation = new UserHistoryEducation($this->db);
    $this->userRegister = new UserRegister($this->db);
  }

  function regis($request)
  {
    $birthDate = date_create($_POST["birthday"]);
    $form1 = [
      "national_id" => $_POST["national_id"],
      "original_province" => $_POST["original_province"],
      "nationality" => $_POST["nationality"],
      "race" => $_POST["race"],
      "email" => $_POST["email"],
      "prefix" => $_POST["prefix"],
      "firstname_th" => $_POST["firstname_th"],
      "firstname_en" => $_POST["firstname_en"],
      "lastname_th" => $_POST["lastname_th"],
      "lastname_en" => $_POST["lastname_en"],
      "password" => $_POST["national_id"],
      "birthday" => date_format($birthDate, "Y-m-d"),
      "blood_group" => $_POST["blood_group"],
      "religion" => $_POST["religion"]
    ];


    $form2 = [
      "is_current" => true,
      "province" => $_POST["province"],
      "alley" => $_POST["alley"],
      "zip_code" => $_POST["zip_code"],
      "street" => $_POST["street"],
      "phone_number" => $_POST["phone_number"],
      "district" => $_POST["district"],
      "sub_district" => $_POST["sub_district"],
      "no" => $_POST["no"],
      "group_no" => $_POST["group_no"],
      "user_id" => $_POST["national_id"]
    ];


    $this->address->insert($form2);
    $this->user->insert($form1);
  }


  function login($username, $password): bool
  {
    $user = $this->user->findOneByNID($username);
    if (count($user) === 0) return false;
    if ($user["password"] != $password) return false;
    $_SESSION["id"] = $username;
    $_SESSION["is_login"] = true;
    return true;
  }

  function getAvailableRegister($universityYear, $round, $type, $degree)
  {
    return $this->openRegister->findAllByRoundAndYear($universityYear, $round, $type, $degree);
  }

  function createEducationHistory($request)
  {
    if (!$_SESSION["is_login"]) {
      return new Error("You're not login");
    }
    $data = [
      "degree" => "ม.6(วิทย์-คณิตย์)",
      "user_id" => $_SESSION["id"],
      "academy" => "โรงเสียนสวนกุหลาบ",
      "GPA" => 4.00,
    ];

    $this->historyEducation->insert($data);
  }

  function enroll($openRegisterEducation)
  {
    if (!$_SESSION["is_login"]) {
      return new Error("You're not login");
    }
    $data = [
      "id" => null,
      "is_approve" => 0,
      "user_id" => $_SESSION["id"],
      "open_register_education" => $openRegisterEducation,
    ];

    $this->userRegister->insert($data);
  }
}
