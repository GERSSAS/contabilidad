<?php
//no hace nada
class Connection2 {
    private $server;
    private $user;
    private $pass;
    private $database;
    private $port;
    private $link;

    function __construct(){
        $this->setConnect();
        $this->connect();
    }

    private function setConnect(){
        require_once 'config.php';
        $this->server = $server;
        $this->user = $user;
        $this->pass = $pass;
        $this->database = $database;
        $this->port = $port;
    }

    private function connect(){
        $this->link = mysqli_connect($this->server, $this->user, $this->pass, $this->database);
        if (!$this->link) {
            die(mysqli_error($this->link));
        }
    }

    public function getConnect(){
        return $this->link;
    }

    public function close(){
        mysqli_close($this->link);
    }
}
?>

