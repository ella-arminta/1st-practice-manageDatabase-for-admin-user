<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Sign Up</title>
   
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <link href="style/signUp-style.css" rel="stylesheet">
</head>
<?php 
    require_once 'api/connect.php'
?>
<body>
    <div class="container" id="login-form">
        <form action="api/addUser.php" method="POST">
            <!-- icon -->
            <h1>Sign Up</h1>

            <label for="first-name">First Name:</label>
            <input type="text" class="form-control" id="first-name" name="first-name" placeholder="Enter First Name" required>

            <label for="last-name">Last Name:</label>
            <input type="text" class="form-control" id="last-name" name="last-name" placeholder="Enter Last Name" required>

            <label for="email">Email:</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Enter First Name" required>

            <label for="username">Username:</label>
            <input type="username" class="form-control" id="username" placeholder="Enter Username" name="newusername" required>
            
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" placeholder="Enter Password" name="newpassword" required>
            
            <a href="index.php">Back</a>
            <button>Submit</button>
        </form>
    </div>

    <!-- bootstrap bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>