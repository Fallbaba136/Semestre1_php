<?php
final class GamesDB 
{

private $db_name = "gamesdb";
private $db_host = "127.0.0.1";
private $db_port = "3306";

private $db_user = "root";
private $db_pwd  = "";

 public function __construct() {
        try {
            $dns = 'mysql:dbname=' . $this->db_name . ';host=' . $this->db_host . ';port=' . $this->db_port;
            $this->pdo = new PDO($dns, $this->db_user, $this->db_pwd);
        } catch (\Exception $ex) {
            die("Erreur : " . $ex->getMessage());
        }
    }





    public function getAllGames(){
        $sql = "SELECT * FROM games WHERE image IS NOT NULL";
        $statement = $this->pdo->prepare($sql);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_OBJ);
        }
}
