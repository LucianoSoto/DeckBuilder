<?php
    require_once ('Models/Accounts.php');

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $conn = mysqli_connect('localhost', 'root', '', 'users') or die("Connection Failed: ".mysqli_connect_error());
        if(isset($_POST['user']) && isset($_POST['pw'])){
            $user = new Account($_POST['user'], $_POST['pw'], "");
            $userSearch = "SELECT `Username`, `Password`, `Admin` FROM `users` WHERE Username = '".$user->getUsername()."'";
            $result = mysqli_query($conn, $userSearch);
            $userFound = mysqli_fetch_all($result, MYSQLI_ASSOC);

            print_r($userFound);
        if($userFound == NULL){
            ?>
            <meta http-equiv="refresh" content="0; 'Views/loginPage.php'" />
            <script>alert("El usuario no existe")</script> 
            <?php
        }
        else {
            if($userFound[0]['Password'] != $user->getPassword()){
                ?>  
                <meta http-equiv="refresh" content="0; 'Views/loginPage.php'" />
                <script>alert("Contraseña incorrecta")</script> <?php
               
            }
            else{
                ?> <script>alert("Contraseña Correcta!")</script> 
                <?php if ($userFound[0]['Admin'] == 1){
                    ?> <meta http-equiv="refresh" content="0; 'Views/adminPage.php'" /> <?php
                }
                else{
                   ?> <meta http-equiv="refresh" content="0; 'Views/userPage.php'" /> <?php
                }
                
                
            }
        }
            
            
        }
    }

    //Para mañana: Usar sesiones y crear una pagina para el usuario



?>