<!DOCTYPE html>
<head>
    <title>Data by ID</title>
    <link rel="icon" href="logo1.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="players.css">
</head>
<body>
    <style>
      body{backgroung-color:whitesmoke;} 
    </style>   
    <form method="POST" action="result.php" class="nick">
        <h5>Get data by ID</h5>
        <div class = "container">
    
<input type ="text" name="ID" placeholder=" " id="ID" class="nickname">
<label for="ID" class="hs">ID</label>
<button type ="submit" name="btn-search" class="go">GO</button>
</div>
</body>
</form>  
<?php

$host="fdb31.biz.nf";
$username = "STORM CLAN";
$password = "sot1234@#";
$db="4003353_storm";
$database = mysqli_connect($host, $username, $password, $db);



?>

 
