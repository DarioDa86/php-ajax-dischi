<!-- importo il DataBase -->
<?php include __DIR__ . "/database.php"; ?>
<!-- /importo il DataBase -->


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./style.css">
        <title>Dischi ma con Php</title>
        
    </head>
    <body>
        <header>
            <div class="logo-spotify">
                <img src="./img/spotify-logo.png" alt="logo spotify">
            </div>
        </header>

        <div class="container">

        <?php foreach($database as $album) { ?>

        <div class="image-album">
            <img src="<?php echo $album['poster'];?>" alt="info.title">
            <h4 class="name-album"><?php echo $album['title'];?></h4>
            <div class="name-author">{{info.author}}</div>
            <div class="year-album">{{info.year}}</div>
        </div>

        <?php }?>


            <div class="album">
                
                <h4 class="name-album">{{info.title}}</h4>
                <div class="name-author">{{info.author}}</div>
                <div class="year-album">{{info.year}}</div>
            </div>
        </div>
    </body>
</html>