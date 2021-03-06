<?php
include __DIR__.'/database.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Dischi</title>
</head>
<body>
    <header>
        <div class="nav">
            <img src="https://www.freepnglogos.com/uploads/spotify-logo-png/spotify-download-logo-30.png" alt="logo">
        </div>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <?php foreach($dischi as $disco){ ?>
                <div class="card-container text-center">
                    <img src="<?php echo $disco['poster']  ?>" alt="disco.title">
                    <p id="title"> <?php echo $disco['title'] ?></p>
                    <p><?php echo $disco['author'] ?></p>
                    <p><?php echo $disco['year'] ?></p>
                </div>
                <?php } ?>
            </div>
        </div>
    </main>
</body>
</html>