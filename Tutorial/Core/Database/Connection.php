
<?php

class dbConnecton{

    public static function makeCon($config){
        try{

            return new PDO(
                $config['connection'].';dbname='.$config['name'],
                $config['username'],
                $config['password'],
                $config['option']

            );
        }catch(PDOException $e){
            die($e->getMessage());
        }

       

    }

}