<?php 
class Home extends Controller{
    function Show(){
     $a =   $this->method();
     echo $a->getSinhVien();
    }

    function SayHi(){
        echo "Home sayHi";
    }
}

?>