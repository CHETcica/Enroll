<?php

require_once ROOT . "/models/baseModel.php";
class OpenRegister extends BaseModel
{
  protected $table =
  "open_register JOIN major on major.id=open_register.major_id JOIN `faculty` on faculty.id=major.faulty_id";
  protected $columns = [
    "major.name", "faculty.name"
  ];


  function __construct($db)
  {
    parent::__construct($db);
  }
  function findAllOpenRegister()
  {
    $sql = "SELECT * FROM `open_register` GROUP BY `round` AND `type`";
    $stmt = $this->db->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll();
  }
  function findAllByRoundAndYear($universityYear, $round, $type, $degree)
  {
    $condition = "university_year = '{$universityYear}' 
    AND round = '{$round}' 
    AND type = '{$type}'  
    AND degree = '{$degree}'";
    $sql = "
    SELECT open_register.id as id, major_id, major.name as major, faculty.name as faculty
    FROM `open_register` 
    JOIN `major` on major.id=open_register.major_id 
    JOIN `faculty` on faculty.id=major.faulty_id 
    WHERE {$condition}";
    $stmt = $this->db->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll();
  }
}
