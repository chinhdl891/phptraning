<?php 
class App{
    protected $controller = "Home";
    protected $action = "SayHi";
    protected $param = [];
    

    function __construct()
    {
      $arr = $this-> urlProgess();
      if(isset($arr[0])){
        $nameController = $arr[0];
        if(file_exists("./mvc/controller/$nameController.php")){
          require_once ("./mvc/controller/$nameController.php");
        $this->controller = $nameController;
        unset($arr[0]);
          if(isset($arr[1])){
            $nameFuntion = $arr[1];
            unset($arr[1]);
            if(method_exists($this->controller,$nameFuntion)){
              $this->action = $nameFuntion;
              $this->param = $arr?array_values($arr) : [];
            }
          }
      }
      }else{
        require_once ("./mvc/controller/Home.php");
      }
    
    call_user_func_array([new $this->controller, $this->action], $this->param);
    }
    function urlProgess(){
        if(isset($_GET["url"])){
          $u = $_GET["url"];
         return explode("/",filter_var(trim($u,"/")));
        }
    }
}
?>