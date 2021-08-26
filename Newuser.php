<?php
    require_once ("Connect.php");
    class Newuser extends Connect{
        function leerdato(){
            $sql = "SELECT * FROM persona";
            $a = Connect::init()->prepare($sql);
            $a-> execute();
            return $a->fetchAll();
           }
    }
?>
