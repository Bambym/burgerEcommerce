<?php 
session_start();
// if($_SESSION['isLogging']){
//     header("location:http")
// }
?>
<?php
require_once("./login_model.php");

?>
<?php
   function secure_data($data) {
    $data_tr = trim($data);
    $data_str = stripslashes($data_tr);
    $data_secure = htmlspecialchars($data_str);
    return $data_secure;
}
if($_SERVER["REQUEST_METHOD"] === "POST"){
    $error_password="";
    $error_username="";
    if(isset($_POST["username"])) {
        $username=secure_data($_POST["username"]);
        $password=secure_data($_POST["password"]);

        $result = findUser($username);
        echo '<pre>';
        var_dump($result);
        echo '</pre>';
        if(count($result)>0){
            var_dump($password);

            if(password_verify($password,$result[0]["password"])){
                var_dump($password,true);
                header("location:dasboard_view.php",true);
            }else{
                $error_password='le mot de passe n\'est pas le bon';
            }

        }else{
            $error_username='ça n\'existe pas';
        }
    

    }else {
        $error_username='Veuillez mettre un username';
    }
}
    

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet"  href="./css/style.css">
    <title>Login</title>
</head>
<body>
    <form method="POST" action="<?=htmlspecialchars($_SERVER["PHP_SELF"])?>"  style="margin: 2rem;" >
        <div class="mb-3 row">
            <label for="username" class="col-sm-2 col-form-label">username</label>
            <div class="col-sm-10">
                <input type="text"  class="form-control" id="username" name="username" value="<?=secure_data($_POST["username"]) ?>">
            </div>
            <p class="text-danger" >
                <?php echo  $error_username?>
            </p>
        </div>
        
        <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                <input  type="password" class="form-control" name="password" id="inputPassword">
            </div>
            <p class="text-danger" >
                <?php echo $error_password ?>
            </p>
        </div>
        <button type="submit" class="btn btn-success" >Envoyer</button>
    </form>
</body>
</html>