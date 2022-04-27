<?php
    require_once("./menu_header.php");
    // if(gettype($db_connection)=== "object"){
    //     $products = getAllProducts($db_connection);
    // }else{
    //     echo $db_connection;
    // }
    if(gettype($db_connection)=== "object"){
        if(isset($_POST["category"])){
            $products = getProductByCategory($db_connection,intval($_POST['category']));
        }else{
            $products = getAllProducts($db_connection);
        }
        
    }else{
        echo $db_connection;
    }

    
?>
<section class = "accueil">

<img src= "./image/banner.png" alt ="bannière burger "/>
<h1>BURGER DWWM17</h1>
<div id='image-ref'>
    
        <form method='POST' action='<?=htmlspecialchars( $_SERVER['PHP_SELF'])?>'>
            <input type=hidden name='category' value = '1'>
            <button type=submit><img src ='./image/b1.png' width='40%' alt ='burger'/></button>
        
        </form>
        <form method='POST' action='<?=htmlspecialchars( $_SERVER['PHP_SELF'])?>'>
            <input type=hidden name='category' value = '2'>
            <button type=submit><img src ='./image/sa1.png' width='40%' alt ='burger'/></button>

        </form>
        <form method='POST' action='<?=htmlspecialchars( $_SERVER['PHP_SELF'])?>'>
            <input type=hidden name='category' value = '3'>
            <button type=submit><img src ='./image/bo1.png' width='40%' alt ='burger'/></button>

        </form>
        <form method='POST' action='<?=htmlspecialchars( $_SERVER['PHP_SELF'])?>'>
            <input type=hidden name='category' value = '4'>
            <button type=submit><img src ='./image/d1.png' width='40%' alt ='burger'/></button>

        </form>
    
    
</div>   

<div class="best-burger">
    
   

    <?php foreach($products as $product => $value): ?>
            <div class="card" style="width: 18rem;">
                <img src=<?=".{$value['img_url']}"?> class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?=$value["nom"]?></h5>
                    <p class="card-text"><?=$value["description"]?></p>
                    <p class="card-text"><?=$value["price"]?> euros </p>
                    <a href="#" class="btn btn-primary">En savoir plus</a>
                </div>
            </div>
    <?php endforeach; ?>    
        

</div>
<?php

    require_once("./footer.php");

?>
</section>    
</body>
</html>