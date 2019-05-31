


<?php

class DBconnection {

    public static function makeConnection($config){

        return new PDO(
            $config['connection'].';'. $config['name'],
            $config['username'],
            $config['password'],
            $config['option']
        
        );
    }
}