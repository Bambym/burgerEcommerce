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
    
    function getAllProducts(\PDO $db_connection){
        
        try {
            
            $query="SELECT * FROM `products`";

            $requete= $db_connection->prepare($query);

            $requete->execute();

            $requete->setFetchMode(PDO::FETCH_ASSOC);
            $products = $requete->fetchAll();
            return $products;

        } catch (\PDOException $error) {
            return "la connexion a échoué". ' ' . $error;
        }
        
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





    
?>
 <?php
    // $username="root";
    // $password="root";
    // $servername="localhost";
    // $dbname = "db_burger2";

    // connect($servername,$dbname,$username,$password);
    
    // try {
    //     $products_db = "SELECT * FROM `products`";

    //     $requete = $db_connection->prepare($products_db);

    //     // $requete ->bindValue(1, $ID_PRODUCT, PDO::PARAM_INT);
    //     // $requete ->bindValue(2, $name, PDO::PARAM_STR);
    //     // $requete ->bindValue(3, $img_url, PDO::PARAM_STR);
    //     // $requete ->bindValue(4, $description, PDO::PARAM_STR);
    //     // $requete ->bindValue(5, $price, PDO::PARAM_INT);
    //     // $requete ->bindValue(6, $note, PDO::PARAM_INT);
    //     // $requete ->bindValue(7, $category, PDO::PARAM_INT);

    //     $requete ->execute();

    //     $results = $requete->get_result();

    //     $products= $results->fetchAll();
        
    //     echo '<pre>';
    //         var_dump($results);
    //     echo '</pre>';   
    
    // }catch(PDOException $error){
    //     echo "la requete n'a pas abouti"." ".$error;
    // }
    
  

 
 ?>