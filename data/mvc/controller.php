<?php

require_once "user.php";

class Controller{

    /**
     * recupera todos los usuarios e invoca a vista para mostrarlos
     */
    public function index(){
        $arrayusers=User::all();//porque es estatico, si fuera dinamico en vez de :: seria =>
        require "views/index.php";//include continua si encuentra error, require no

    }

    /**
     * recupera un usuario e invoca a vista para mostrarlo
     */
    public function show(){
        $id = $_GET["id"];
        $user = User::find($id);
        require "views/show.php";
    }
}