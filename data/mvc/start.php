<?php

  require_once "controller.php";
  
  $app = new Controller();
  // url: http://mvc.local?method=[index][show]&id=[id_usuario]
  if (isset($_GET["method"])){
    $method = $_GET["method"];
  }else{
    $method = "index";
   

  }

  try{
    if(method_exists($app, $method)){
        $app->$method();
    }else{
        throw new Exception();
    }
  } catch(Exception $ex){
    http_response_code(404);
    echo "no se ha encontrado";

  }

/*
echo"<h3>Prueba recuperacion user</h3>";

require "user.php";

var_dump(User::all());//A modo de prueba rapida para ver si funciona
echo"<br>";
var_dump(User::find(2));*/