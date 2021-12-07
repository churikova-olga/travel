<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset ="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel</title>
</head>
<body>
    <?php 
    function db_connect() {
        static $connection;
        if(!isset($connection)){
            $config=parse_ini_file('../../hw_config.ini');
    
            $connection = mysqli_connect(
                $config['host'],
                $config['username'],
                $config['password'],
                $config['dbname']
            );
    
            if ($connection == false){
                echo 'При попытке подключения к БД возникла ошибка, обратитесь к администратору';
                return false;
            } 
        }
        return $connection;
    }
    db_connect();
    ?>
</body>
</html>

