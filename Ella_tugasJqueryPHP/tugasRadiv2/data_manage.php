<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style/data-manage-style.css">
    <title>Manage user data</title>
    <script src="jquery-3.6.0.min.js"></script>
</head>
<script>
        $(function(){
            // untuk memunculkan form add
            $('#add-button').click(function(){
                $('#add-container').css('visibility','visible');
            })
            $('#btn-silang').click(function(){
                $('#add-container').css('visibility','hidden');
            })
            $('#h1-silang').click(function(){
                $('#add-container').css('visibility','hidden');
            })
            // untuk memfilter table 
            $("#search-button").click(function () {
                var value = $('#search-input').val().toLowerCase();
                $("tbody tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
            // untuk mendelete row
            $(document).on("click",'button.delete',function(){
                $(this).parent().parent().remove();
            })
            // untuk menambah row
            $(document).on('submit', '#form-add-data', function() {
                var name=$('#name').val();
                var phone=$('#phone').val();
                var email=$('#email').val();
                var address=$('#address').val();
                var count = $('#table tbody tr').length;
                $('#table > tbody:last-child').append('<tr><td data-label="S.No">'+count+'</td><td data-label="S.Name">'+name+'</td><td data-label="S.Phone">'+phone+'</td><td data-label="S.Email">'+email+'</td><td data-label="S.Address">'+address+'</td><td data-label="S.Delet"><button class="btn btn-danger delete">Delete</button></td></tr>');
                $('#name').val('');
                $('#phone').val('');
                $('#email').val('');
                $('#address').val(''); 
                return false;
            });
        });
    </script>
<?php
 include "api/connect.php";
 if(!isset($_SESSION['username'])){
  ?>
  <script>
      alert("Silahkan login terlebih dahulu");
      window.location.replace("index.php");
  </script>
  <?php
}
?>

<body>
    <div class="navbar">
        <div>
            <h2 style="padding-left: 20px;">INPUT DATA</h2>
        </div>
        <div class="left">
            <div><p>Home</p></div>
            <a href="api/logout.php"><button>Sign Out <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
                                                            <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/></svg>
                                    </button>
            </a>
        </div>
    </div>
    <img src="img/background.jpg" alt="background img">
    <div class="search-bar">
        <div> <!--h1 search-->
        <h1>Search : </h1>
        </div>
        <div> <!--search dan add button-->
        <input type="text" id="search-input" placeholder="Enter to search">
        <button id="search-button"class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                </svg>search</button>
        <button class="btn btn-primary" id="add-button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                </svg>add</button>
        </div>
    </div>
    <div class="daftar-data-container">
        <table class="table" id="table">
            <thead>
                <th>No</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Address</th>
                <th>Delete</th>
            </thead>
            <tbody>

                <tr>
                    <td data-label="S.No">1</td>
                    <td data-label="S.Name">Ella</td>
                    <td data-label="S.Phone">089681551106</td>
                    <td data-label="S.Email">armintaella15@gmail.com</td>
                    <td data-label="S.Address">Pakuwon City Taman mutiara c3 no 40</td>
                    <td data-label="S.Delet"><button class="btn btn-danger delete">Delete</button></td>
                </tr>
                <tr>
                    <td data-label="S.No">2</td>
                    <td data-label="S.Name">Leon</td>
                    <td data-label="S.Phone">089238432994</td>
                    <td data-label="S.Email">leonbenediktus@gmail.com</td>
                    <td data-label="S.Address">Jalan Kalisari Selatan no 32</td>
                    <td data-label="S.Delet"><button class="btn btn-danger delete">Delete</button></td>
                </tr>
            </tbody>
        </table>
    </div> <!---table end-->
    <!--add form -->
    <div id="add-container">
        <div>
        <div style="display: flex;flex-direction:row"><h1>Add data &emsp; &emsp; &emsp;</h1><h1 id="h1-silang">X</h1></div>
        <div>
            <form id="form-add-data" action="" style="display: flex;flex-direction:column">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" required>
                <label for="phone">phone:</label>
                <input type="text" name="phone" id="phone" required>
                <label for="email">Email:</label>
                <input type="text" name="email" id="email" required>
                <label for="address">Address:</label>
                <input type="text" name="address" id="address" required>
        </div>
        <div id="form-button">
        <button type="button" class="btn btn-secondary" id="btn-silang">Close</button>
        <button type="submit" class="btn btn-primary">Add</button></form>  <!--end form-->
        </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>