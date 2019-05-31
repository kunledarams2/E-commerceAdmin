
<?php


class Router{

 protected $Routes = [];

    public function defineUri($Routes){

        $this->Routes=$Routes;

    }

    public function directUri($uri){

        if(array_key_exists($uri,$this->Routes)){
            return $this->Routes[$uri];
        }
        throw new Exception("No link to the URI");
        
        
    }
}