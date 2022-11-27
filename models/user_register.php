<?php

require_once ROOT . "/models/baseModel.php";

class UserRegister extends BaseModel
{
  protected $table = "user_register";
  protected $columns = [
    "open_register_education", "user_id", "is_approve", "id"
  ];

  function __construct($db)
  {
    parent::__construct($db);
  }
  function findAllByEnroll()
  {
    $sql = "SELECT user_register.id as id, users.firstname_th as fname, major.name as major, is_approve
    FROM `user_register`  
    JOIN `users` ON user_register.user_id = users.national_id
    JOIN `open_register` ON user_register.open_register_education = open_register.id
    JOIN `major` ON open_register.major_id = major.id";
    $stmt = $this->db->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll();
  }
  function updateApproveByid($id, $status)
  {
    $sql = "UPDATE `user_register` SET `is_approve`='$status' WHERE `id`= $id";
    $stmt = $this->db->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll();
  }
}
