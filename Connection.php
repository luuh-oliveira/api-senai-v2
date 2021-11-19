<?php

class Connection{

    private $_dbHostName = "localhost";
    private $_dbName = "cadastro";
    private $_userName = "root";
    private $_dbPassword = "bcd127";
    private $_conn;

    public function __construct(){
        
        try {
            
            //acesso ao atributo da classe
            $this->_conn = new PDO("mysql:host =$this->_dbHostName;dbname=$this->_dbName;", 
                                    $this->_userName, 
                                    $this->_dbPassword);
            
            //configurações
            $this->_conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $e) {
            
            echo "Connection error:" . $e->getMessage();

        }

    }

    public function returnConnection(){
        return $this->_conn;
    } 

}

?>