<?php
class DB{

    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "bid_ece";
    private $db;
/*paramètres que prends la fontion DB qu'on a déclarer à la tête du header*/
    public function __construct($host = null, $username = null, $password = null, $database =null){
        if($host != null){
            $this->host = $host;
            $this->username = $username;
            $this->password = $password;
            $this->database = $database;
        }
        /**PDO pour se connecter à la base de données */
        try{
            $this->db = new PDO("mysql:host=".$this->host.";dbname=".$this->database, $this->username,
            $this->password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8",
                                    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING ));
        }catch(PDOException $e){
            die("Impossible de se connecter a la base");
        }
    }
    /**méthode pour faire les requètes plus rapidement */ 
    public function query($sql, $data = array()){
        $req =$this->db->prepare($sql);
        $req->execute($data);
        return $req->fetchAll(PDO::FETCH_OBJ);
    }   
}
