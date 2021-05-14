<?php 

class myException extends Exception{

    public function printJson(){

        header("Content-type: application/json");

        $arr = array(
            "message" => $this->message,
            "code" => $this->code,
            "line" => $this->line,
            "file" => $this->file
        );

        return json_encode($arr);
    }

    public function printXML(){

        header("Content-type: text/xml");

        $xml = new SimpleXMLElement("<hata/>");
        $xml->addChild("message", $this->message);
        $xml->addChild("code", $this->code);
        $xml->addChild("line", $this->line);
        $xml->addChild("file", $this->file);

        return $xml->asXML();
    }
    
}

try {
    if(!isset($_GET["id"])){
        throw new myException("Id parametresi eksik");
    }
    else if(empty($_GET["id"])){
        throw new myException("Id parametresi bos");
    }
    else if(!is_numeric($_GET["id"])){
        throw new myException("Id parametresi sayi degil");
    }
    else{
        echo $_GET["id"];
    }
} catch (myException $e) {
    echo $e->printJson();
} finally {

    header("Content-type: text/html");

    echo "<br/> <br/>" . "finally methodu calisti";
}


?>