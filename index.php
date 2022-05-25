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
    <title>Dischi</title>
</head>
<body>
    <main>
        <?php foreach($dischi as $disco){ ?>
        <div class="card-container text-center">
            <img src="<?php echo $disco['poster']  ?>" alt="disco.title">
            <p id="title"> <?php echo $disco['title'] ?></p>
            <p><?php echo $disco['author'] ?></p>
            <p><?php echo $disco['year'] ?></p>
        </div>
        <?php } ?>
    </main>
</body>
</html>