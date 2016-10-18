<?php
/**
 * Created by PhpStorm.
 * User: VanHyori
 * Date: 10/14/2016
 * Time: 3:31 AM
 */
    /*simplify the
    document to be more
    readable*/


    require_once ('class.Users.inc.php');
    $myUser = new \CIGModels\Users();
    $myUser->_UserName = "Hwoarang";
    echo $myUser->_UserName;
?>
