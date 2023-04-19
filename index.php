<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong Password Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <?php 
        $passwordLength = $_GET['pass'];
    ?>
    <?php
    function genera_password ($passwordLength){
        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!?~@#-_+<>[]{}'; 
        $pass = []; 
        $alphaLength = strlen($alphabet) - 1; 
        for ($i = 0; $i < $passwordLength; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return implode($pass); 
    }
    ?>
    <div class="container">
        <div class="title">
            <h1>Strong Password Generator</h1>
        </div>
        <form action="index.php" method="GET">
            <label for="pass" class="form-label">Genera una password sicura</label>
            <input type="number" id="pass" name="pass" class="form-control" aria-labelledby="passwordHelpBlock">
            <div id="passwordHelpBlock" class="form-text">
            Digita la lunghezza della password che vuoi generare.
            </div>
        </form>
        <div class="password">
            <span>Lunghezza pass: <?php echo $passwordLength ?></span>
            <hr>
            <span>Password Generata: <?php echo genera_password($passwordLength) ?></span>
        </div>
    </div>
</body>
<style>
    .container{
        width: 80%;
    }
    .title{
        text-align:center;
    }
</style>
</html>