
<?php
abstract class condb {
  // Properties
  
  private $localhost='127.0.0.1';
  private $password='root';
  private $dbuser='root';
  private $db2='ticket';

  // Methods
 public function connectF() {
  
   $connect= new mysqli($this->localhost,$this->dbuser,$this->password,$this->db2)  ;
   
   return   $connect;
   
	/*mysqli_select_db($connect,);*/
  } 
  
     #abstract function sql();
	 #abstract function cover();
	 
}



?>






?>


