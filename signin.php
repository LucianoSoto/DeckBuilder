<?php
    require_once ('Models/Accounts.php');

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $conn = mysqli_connect('localhost', 'root', '', 'users') or die("Connection Failed: ".mysqli_connect_error());
        
            $sql = "CREATE DATABASE IF NOT EXISTS users";
            $query = mysqli_query($conn, $sql);
            $sql = "CREATE TABLE IF NOT EXISTS `users` (
                `Username` varchar(100) NOT NULL PRIMARY KEY, `Password` varchar(100) NOT NULL, `Email` varchar(100) NOT NULL, `Admin` int(1) NOT NULL)";
            $query = mysqli_query($conn, $sql);
            $sql = "SELECT * FROM users";
            $rows = mysqli_query($conn, $sql);
            $tableEmpty =  mysqli_fetch_array($rows, MYSQLI_ASSOC);
            if(!isset($tableEmpty['Username'])){
                $sql = "INSERT INTO `users` (`Username`, `Password`, `Email`, `Admin`) VALUES ('Yami Yugi', 'kingofduels', 'cards@konami.com', 1)";
                $rows = mysqli_query($conn, $sql);
            }

        if(isset($_POST['user']) && isset($_POST['pw']) && isset($_POST['email'])){
            $user = new Account($_POST['user'], $_POST['pw'], $_POST['email']);
            $usernameInDB = ("SELECT `Username` FROM `users` WHERE Username = '".$user->getUsername()."'");
            $UDBresult = $conn->query($usernameInDB);
            $emailInDB = ("SELECT `Email` FROM `users` WHERE Email = '".$user->getEmail()."'");
            $EDBresult = $conn->query($emailInDB);

            if(mysqli_num_rows($UDBresult) != 0){
                ?> 
                <meta http-equiv="refresh" content="0; 'Views/signin.php'" />
                <script>alert("El nombre de usuario no esta disponible")</script> <?php
            }
            elseif(mysqli_num_rows($EDBresult) != 0){
                ?> 
                <meta http-equiv="refresh" content="0; 'Views/signinPage.php'" />
                <script>alert("Este email ya esta registrado")</script> <?php
            }
            else{
                $sql = "INSERT INTO `users` (`Username`, `Password`, `Email`) VALUES ('".$user->getUsername()."', '".$user->getPassword()."', '".$user->getEmail()."')";

                $query = mysqli_query($conn, $sql);?>
                <meta http-equiv="refresh" content="0; 'Views/index.php'" />

                <script>alert("Cuenta creada correctamente")</script>
                <?php
            }

        }

    


    }

?>














