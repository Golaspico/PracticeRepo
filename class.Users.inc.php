<?php
/**
 * Created by PhpStorm.
 * User: VanHyori
 * Date: 10/14/2016
 * Time: 2:39 AM
 */

namespace CIGModels;


class Users
{
    protected $_UsersID;
    protected $_UserName;
    protected $_Email;
    protected $_Password;

    function __get($name)
    {
        // TODO: Implement __get() method.
        return $this->$name;
    }
    
    function __set($name, $value)
    {
        // TODO: Implement __set() method.
        if(property_exists($this,$name)){
            if($this->_UsersID == $name){
               $this->_UsersID = $name;
            }
            if($this->_UserName == $name){
                $this->_UserName = $name;
            }

            if($this->_Email == $name){
                $this->_Email = $name;
            }

            if($this->_Password == $name){
                $this->_Password = $name;
            }
        }else{
            // Throw Exception if no Property Existed.
            trigger_error('Undefined property via__get: ' . $name);
            

        }
    }


    
}