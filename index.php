<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $serverName = $_ENV['AZURE_SQL_SERVERNAME'];
    $connectionOptions = array(
        'Database' => $_ENV['AZURE_SQL_DATABASE'],
        'Uid' => $_ENV['AZURE_SQL_UID'],
        'PWD' => $_ENV['AZURE_SQL_PWD'],
    );

    $conn = sqlsrv_connect($serverName, $connectionOptions);

    if ($conn) {
        echo "Connected successfully";
    } else {
        echo
            "Connection failed: " . sqlsrv_errors();
    }

    sqlsrv_close($conn);

    ?>



</body>

</html>