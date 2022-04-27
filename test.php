<div id='image-ref'>
    
    
        <!-- <form method='POST' action='<?=htmlspecialchars( $_SERVER['PHP_SELF'])?>'>
            <input type=hidden name='category' value = '1'>
            <button type=submit><img src ='./image/b1.png' width='25%' alt ='burger'/></button>
        
        </form>
        <form method='POST' action='<?=htmlspecialchars( $_SERVER['PHP_SELF'])?>'>
            <input type=hidden name='category' value = '2'>
            <button type=submit><img src ='./image/b1.png' width='25%' alt ='burger'/></button>

        </form>
        <form method='POST' action='<?=htmlspecialchars( $_SERVER['PHP_SELF'])?>'>
            <input type=hidden name='category' value = '3'>
            <button type=submit><img src ='./image/b1.png' width='25%' alt ='burger'/></button>

        </form>
        <form method='POST' action='<?=htmlspecialchars( $_SERVER['PHP_SELF'])?>'>
            <input type=hidden name='category' value = '4'>
            <button type=submit><img src ='./image/b1.png' width='25%' alt ='burger'/></button>

        </form>
     -->
    
</div>   
function getProductByCategory(\PDO $db_connection, \int $ID_cat=null){
       try {
            $query= $ID_cat === null ? "SELECT * FROM `products`" :"SELECT * FROM `products`WHERE `category` = $ID_cat";
                    
            $requete=$db_connection->prepare($query);

            $requete->execute();

            $requete->setFetchMode(PDO::FETCH_ASSOC);
            $products = $requete->fetchAll();
            return $products ;
       } catch (\PDOException $error) {
        return "la requête a échoué". ' ' . $error;
    }
   }