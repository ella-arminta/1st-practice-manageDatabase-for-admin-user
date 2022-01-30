<?php
include "connect.php";

if($_SERVER['REQUEST_METHOD']=='POST'){
    $first_n = $_POST['first-name'];
    $last_n = $_POST['last-name'];
    $email = $_POST['email'];
    $n_username = $_POST['newusername'];
    $n_password = $_POST['newpassword'];

    $sql = "INSERT INTO `data_user`(`first_name`, `last_name`, `email`, `username`, `password`) VALUES (?,?,?,?,?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$first_n,$last_n,$email,$n_username,$n_password]);
    if($stmt){
        echo "<script>alert('Data has been saved in our database')</script>";
        ?>
        <script>
            window.location.replace("../index.php")
        </script>
        <?php
    }

}
?>