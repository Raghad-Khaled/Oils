

<?php


require('Database.php');

class oil
{
  private $_conn;

  public function __construct()
  {
    $DB_opt = Database::getInstance();
    $this->_conn = $DB_opt->getConnection();
  }


  public function InsertProduct($title,$se3a,$prise,$benefits,$image)
  {
    
      $qury = "INSERT INTO oil (`name`,`prise`,`capacity`,`image`,`benefits`) VALUES ($title,$prise,$se3a,$image,$benefits)";
      $result = mysqli_query($this->_conn, $qury);
    
  }

}


?>