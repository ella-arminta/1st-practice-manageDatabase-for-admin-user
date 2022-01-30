<?php
include "connect.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $pass = $_POST['password'];

    $sql = "SELECT * FROM data_user WHERE username=? AND password= ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$username,$pass]);
    $row_count = $stmt->rowCount();

    if ($row_count >= 1 ) {
        $user = $stmt->fetch();
        
        $_SESSION['username'] = $user['username'];
        $_SESSION['password'] = $user['password'];
        ?>
        <script>
            alert("Welcome <?php echo $_SESSION['username']?> ,you have successfully logged in");
            window.location.replace("../data_manage.php");
        </script>
        <?php
    } else {
        ?>
        <script>
            alert("Wrong username or password");
            window.location.replace("../index.php")
        </script>
        <?php
    }  
}
?>
