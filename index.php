<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>MP3</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <?php 

            include_once 'helpers.php';

            if (isset($_GET['page'])) {
                if (file_exists("pages/{$_GET['page']}.php")){
                    include_once "pages/{$_GET['page']}.php";
                } else {
                    include_once 'pages/error404.php';
                }    
            } else {    
                include_once 'pages/albums.php';
            }
        ?>    
    </div>
</body>
</html>