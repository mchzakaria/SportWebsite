<?php
class Connexion {
    private $_host = "localhost";
    private $_user = "root";
    private $_pwd = "";
    private $_dbname = "sport";
    private $_statement;

    public function __construct()
    {
        
    }

    public function getPDO()
    {
        return new PDO("mysql:host=" . $this->_host . ";dbname=" . $this->_dbname, $this->_user, $this->_pwd);
    }
}
?>
