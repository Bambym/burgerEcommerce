<?php
  // $products_data=[
  //   [
  //       "nom"=>"B.Bacon",
  //       "img" => "./image/b2.png",
  //       "description" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro, alias",
  //       "prix" => 7,
  //       "categorie" =>"burger",
  //       "Note" => 4,
  //   ],
  //     [ "nom"=> "B.Double",
  //       "img" => "./image/b3.png",
  //       "description" =>"Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur, incidunt?",
  //       "prix" => 8,
  //       "categorie" => "burger",
  //       "note"=>5,
  // ],
  //   [
  //       "nom"=>"Cesar" ,
  //       "img" => "./image/sa1.png",
  //       "description" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro, alias",
  //       "prix" => 7,
  //       "categorie" =>"salade",
  //       "Note" => 5, 
  //   ],
  //   [
  //       "nom"=> "Chevre",
  //       "img" => "./image/sa2.png",
  //       "description" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro, alias",
  //       "prix" => 6,
  //       "categorie" =>"salade",
  //       "Note" => 4,
  //   ],
  //   [
  //       "nom"=> "coca",
  //       "img" =>"./image/bo1.png" ,
  //       "description" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro, alias",
  //       "prix" => 3,
  //       "categorie" =>"boisson",
  //       "Note" => 5,
  //   ],
  //   [
  //       "nom" => "fanta",
  //       "img" => "./image/bo4.png",
  //       "description" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro, alias",
  //       "prix" => 3,
  //       "categorie" =>"boisson",
  //       "Note" => 5,
  //   ],
  //   [
  //       "nom" => "sundae",
  //       "img" => "./image/d5.png",
  //       "description" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro, alias",
  //       "prix" => 3,
  //       "categorie" =>"dessert",
  //       "Note" => 5,
  //   ],
  //   [
  //       "nom"=> "fondant",
  //       "img" => "./image/d1.png",
  //       "description" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro, alias",
  //       "prix" => 2,
  //       "categorie" =>"dessert",
  //       "Note" => 4,
  //   ]
  // ];
  //    $burger = [
  //       "B.Bacon" => [
  //           "img" => "./image/b2.png",
  //           "description" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro, alias",
  //           "prix" => 7,
  //           "categorie" =>"burger",
  //           "Note" => 4,
  //       ],
  //       "B.Double" => [
  //           "img" => "./image/b3.png",
  //           "description" =>"Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur, incidunt?",
  //           "prix" => 8,
  //           "categorie" => "burger",
  //           "note"=>5,
  //       ]
  //   ];

  //   $salade = [
  //       "Cesar" => [
  //           "img" => "",
  //           "description" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro, alias",
  //           "prix" => 7,
  //           "categorie" =>"salade",
  //           "Note" => 5,
  //       ],
  //       "Chevre" => [
  //           "img" => "",
  //           "description" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro, alias",
  //           "prix" => 6,
  //           "categorie" =>"salade",
  //           "Note" => 4,
  //       ]
  //   ];
  //   $boissons = [
  //       "coca" => [
  //           "img" =>"" ,
  //           "description" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro, alias",
  //           "prix" => 3,
  //           "categorie" =>"boisson",
  //           "Note" => 5,
  //       ],
  //       "fanta" => [
  //           "img" => "",
  //           "description" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro, alias",
  //           "prix" => 3,
  //           "categorie" =>"boisson",
  //           "Note" => 5,
  //       ]
  //   ];
  //   $dessert = [
  //       "sundae" => [
  //           "img" => "",
  //           "description" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro, alias",
  //           "prix" => 3,
  //           "categorie" =>"dessert",
  //           "Note" => 5,
  //       ],
  //       "fondant" => [
  //           "img" => "",
  //           "description" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro, alias",
  //           "prix" => 2,
  //           "categorie" =>"dessert",
  //           "Note" => 4,
  //       ]
  //   ];

?>

<?php
    require_once("./db.php");
    
    $db1= new DataBase();
    $db1->connect();

    $db_connection = $db1->get_db_connection() ;
    $error_db = $db1->get_error();

    // $products_db = "SELECT * FROM `products`";

    // $requete = $db_connection->query($products_db);

    // $products = $requete->fetchAll()

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.1/mdb.min.css" rel="stylesheet"/>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet"/>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <link rel="stylesheet"  href="./css/style.css">

    <title>Burger DWWM17</title>
</head>
<body>
  
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Burger DWWM17</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="./index.php">Accueil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./page_boutique.php">Notre Carte</a>
              </li>
             
              <li class="nav-item">
                <a class="nav-link " href="./connect.php">Dashboard</a>
              </li>
            </ul>
           
          </div>
        </div>
      </nav>
    </header>



