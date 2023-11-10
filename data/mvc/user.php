<?php

class User{

    const USERS= [
        array(1,'David'),
        array(2,'Pedro'),
        array(3,'Marta'),
        array(4,'Elena')
    ];

    /**
     * @return Array con los datos de los usuarios
     */
    public static function all(){
        return User::USERS;//Con los :: Accedo a algo de esa clase
    }//all

    /**
     * @return Array con los datos de un usuario
     * @param $id identificador unico del usuario
     */
    public static function find($id){
        return User::USERS[$id-1];
    }//find
}
