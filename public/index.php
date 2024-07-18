<?php
include './../app/config.php';
include './../app/Libraries/Rotes.php';
include './../app/Libraries/Controller.php';
include './../app/Libraries/Database.php';
$db = new Database;
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="<?=URL?>public/css/style.css" rel="stylesheet">
    <script src="<?=URL?>public/js/main.js"></script>
    <title><?= APP_HOME ?></title>
</head>
<body>
 <?php
    include "../App/Views/layout/header.php";
    $rotes = new Rotes();
    include "../App/Views/layout/footer.php";
 ?>    

</body>
</html>