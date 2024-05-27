<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php
try {
    $connexion = new PDO('mysql:host=localhost;port=3306;dbname=ismontic_db', 'root', '');
    echo "Connected successfully";
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
?>
