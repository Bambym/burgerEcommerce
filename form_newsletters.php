<?php

    function secure_data ($data){

        $data_tr= trim($data);
        $data_str= stripslashes($data_tr);
        $data_secure = htmlspecialchars($data_str);
        return $data_secure;

    };

    function validate_data($data){

        $data_validate = '';
        $is_success = false;
        $error='';
        if (isset($data) && !empty($data) && filter_var($data,FILTER_VALIDATE_EMAIL)!== false ){
            
                
                $is_success = true;    
             
        }else{
           
            $data_validate = secure_data($data);
            $error = 'veuillez remplir ce champs';
     
        }
        return [
            "data"=> $data_validate,
            "success" => $is_success,
            "error"=> $error
        ];
    };

if($_SERVER["REQUEST_METHOD"]=== "POST"){
   
    $email = validate_data($_POST['email']);
    
};
?>

<form method='POST' action="<?= htmlspecialchars( $_SERVER["PHP_SELF"])?>" style="margin : 2rem;" >
        
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input value="<?= $email['data']?>" type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
            <p class="text-danger">
                <?php echo $email['error']?>
            </p>
        </div>
       
        <button type='submit' class="btn btn-success">S'inscrire à la newsletters</button>
        <!-- success message-->

        <?php
            if ( $email["success"]){
                echo "<p class= 'alert alert-success'>Merci pour votre inscription</p>";
            }
        
        ?>
</form>