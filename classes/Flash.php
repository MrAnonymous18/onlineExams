<?php

class Flash{

    var $type;
    var $msg;

    public function setType($type){
        define($this->type,$type);
    }
    public function getType(){
        return $this->type;
    }

    public function setMsg($msg){
        define($this->msg,$msg);
    }
    public function getMsg(){
        return $this->msg;
    }
}
?>
