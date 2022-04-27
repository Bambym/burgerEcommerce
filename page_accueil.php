    <?php
        if($error_db === null){
            // $products = new Product($db_connection);
            $burgers = getBestBurger($db_connection);
        }else{
            echo $error_db;
        }
    ?>

<section class = "accueil">

    <img src= "./image/banner.png" alt ="bannière burger "/>
    <h1>BURGER DWWM17</h1>
    <h2>Nos meilleurs burgers</h2>
    <div class="best-burger">
        
       

        <? foreach($burgers as $burger =>$value ): ?>
           
                 <div class='card' style='width: 18rem;'>
                    <img src=<?=".{$value['img_url']}"?> class='card-img-top' alt='...'>
                    <div class='card-body'>
                        <h5 class='card-title'><?=$value['name']?></h5>
                        <p class='card-text'><?=$value['description']?></p>
                        <p class='card-text'><?=$value['price']."euros"?></p>
                        <p class='card-text'><?=$value['note']."/5"?></p>
                        <a href='#' class='btn btn-primary'>En savoir plus</a>
                    </div>
                </div>
            
        <? endforeach; ?>    
            
            
            
        


        
        
        
 
    </div>

</section>