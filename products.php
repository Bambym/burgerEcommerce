<?php
    
    
    class Products{
        private $db_connection;
        private $products;
        public function getAllProducts(\PDO $db_connection){
        
            try {
                
                $query="SELECT * FROM `products`";
    
                $requete=$this->db_connection->prepare($query);
    
                $requete->execute();
    
                $requete->setFetchMode(PDO::FETCH_ASSOC);
                $this->products = $requete->fetchAll();
                // return $products;
    
            } catch (\PDOException $error) {
                return "la connexion a échoué". ' ' . $error;
            }
            
        }
        public function get_getAllProducts(){
            return $this->products;
        }
    
        function getBestBurger(\PDO $db_connection){
            try {
                $query="SELECT * FROM `products` WHERE `category` = 1 ORDER BY `note` DESC LIMIT 2" ;
                    
                $requete=$db_connection->prepare($query);
    
                $requete->execute();
    
                $requete->setFetchMode(PDO::FETCH_ASSOC);
                $burgers = $requete->fetchAll();
                return $burgers ;
            } catch (\PDOException $error) {
                return "la requête a échoué". ' ' . $error;
            }
        }
    
        function getProductByCategory(\PDO $db_connection){
            try {
                 $query= "SELECT * FROM `products`WHERE `category` = ? ";
                         
                 $requete=$db_connection->prepare($query);
     
                 $requete->execute(array($_POST['category']));
     
                 $requete->setFetchMode(PDO::FETCH_ASSOC);
                 $products = $requete->fetchAll();
                 return $products ;
            } catch (\PDOException $error) {
             return "la requête a échoué". ' ' . $error;
         }
        }
    }
    
    

?>