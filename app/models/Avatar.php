<?php 

class Avatar extends Database
{
  private $pdo;

  public function __construct()
  {
    $this->pdo = $this->getConnection();
  }

  public function add($image, $type) 
  {
    try {
      $stm = $this->pdo->prepare("INSERT INTO avatar (avatar, img_type) VALUES (?, ?)");
      $stm->execute([$image, $type]);

      if ($this->pdo->lastInsertId() > 0) {
        return true;
      } else {
        return false;
      }
    } catch (PDOException $err) {
      return false;
    }
  }

  public function list()
  {
    try {
      $stm = $this->pdo->query("SELECT * FROM avatar");

      if ($stm->rowCount() > 0) {
        return $stm->fetchAll(PDO::FETCH_ASSOC);
      } else {
        return [];
      }
    } catch (PDOException $err) {
      return [];
    }
  }

  public function listById($id)
  {
    try {
      $stm = $this->pdo->prepare("SELECT * FROM avatar WHERE id = ?");
      $stm->execute([$id]);

      if ($stm->rowCount() > 0) {
        return $stm->fetch(PDO::FETCH_ASSOC);
      } else {
        return false;
      }
    } catch (PDOException $err) {
      return false;
    }
  }

  public function remove($id)
  {
    try {
      $stm = $this->pdo->prepare("DELETE FROM avatar WHERE id = ?");
      $stm->execute([$id]);

      return true;
    } catch (PDOException $err) {
      return false;
    }
  }
}