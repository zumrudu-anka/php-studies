<?php

interface IDatabase{
    public function create();
    public function read();
    public function update();
    public function delete();
}


class Database implements IDatabase{
    
    public function create(){
        echo "create";
    }
    
    public function read(){
        echo "read";
    }
    
    public function update(){
        echo "update";
    }
    
    public function delete(){
        echo "delete";
    }

}

?>