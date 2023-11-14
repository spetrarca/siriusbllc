<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $host = $_ENV['AZURE_SQL_SERVERNAME'];
    $database = $_ENV['AZURE_SQL_DATABASE'];
    $username = $_ENV['AZURE_SQL_UID'];
    $password = $_ENV['AZURE_SQL_PWD'];
    
    try {
        $conn = new PDO('AzureSQL:host=$host;dbname=$database', $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Comnected successfully";
    } catch (PDOException $e) {
        echo "". $e->getMessage() ."";
    }
    ?>



</body>

</html>