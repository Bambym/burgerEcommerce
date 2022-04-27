


<?php


class DataBase {

    private $db_connection = null;
    private $error_connection = null ;
    private $servername = "localhost";
    private $dbname = "db_burger2";
    private $username = 'root';
    private $password = 'root';
    
    
    public function connect(){
    
        try {
    
            $this->db_connection = new PDO("mysql:host=$this->servername;dbname=$this->dbname",$this->password,$this->username,);
            $this->db_connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
        } catch (PDOException $error){
            $this->error_connection = $error->getMessage();
        }
    }
    
    public function get_db_connection(){
        return $this->db_connection ;
    }
    
    public function get_error(){
        return $this->error_connection ;
    }
    }
        $db1= new DataBase();
        $db1->connect();
    
        $db_connection = $db1->get_db_connection() ;
        $error_db = $db1->get_error();

        function findUser($username){
            $query = "SELECT * FROM `users` WHERE `username`= ? ";
    
            $requet =$GLOBALS[ "db_connection"]->prepare ($query);
            $requet->execute([$username]);
            $requet->setFetchMode(PDO::FETCH_ASSOC);

            return $requet->fetchAll();
        }
        function getAllProducts(\PDO $db_connection){
        
            try {
                
                $query="SELECT * FROM `products`";
    
                $requete=$db_connection->prepare($query);
    
                $requete->execute();
    
                $requete->setFetchMode(PDO::FETCH_ASSOC);
                $products = $requete->fetchAll();
                return $products;
    
            } catch (\PDOException $error) {
                return "la connexion a échoué". ' ' . $error;
            }
            
        }

        