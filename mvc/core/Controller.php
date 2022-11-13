<?php 
class Controller{
public function method(){
    require_once "./mvc/models/SinhVienModel.php";
    return new SinhVienModel();
}
}

?>