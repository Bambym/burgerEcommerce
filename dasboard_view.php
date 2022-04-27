
<?php
    if (session_status() !== "PHP_SESSION_ACTIVE"){
        session_start();
        if($_SESSION["isLOgging"]){
            header("location:index.php");
        }
    }
    require_once("./login_model.php");

    if(gettype($db_connection)=== "object"){
        $products = getAllProducts($db_connection);
        }else{
            echo $db_connection;
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>BIENVENUE<?php $_SESSION["username"]?>, dans ton dashboard</h1> 
    <form methode="GET" action = "<?=$_SERVER["PHP_SELF"]?>">
    <button type="submit">se deconnecter</button>

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
    
</body>
</html>