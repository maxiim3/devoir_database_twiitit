<?php
    include_once '../web/index.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>TITLE</title>
    <link rel="stylesheet" href="/web/style.css">
</head>

<body>

<main class="wrapper">
    <div class="articles">
        <form name="newTwiit" method="post" action="updateDB.php">
            <label><input type="file" name="userpicture" accept="image/png, image/jpeg, image/jpg"> ></label>
            <label> Username: <input type="text" placeholder="Username" name="username" value="" required></label>
            <label>Your text<input type="text" placeholder="Express yourself" name="content" value="" required></label>
            <label>Date<input type="date" placeholder="Default date Today" name="date_posted" value=""></label>
            <button type="submit">Twiit it !</button>
            <button type="reset">Reset</button>
        </form>

        <!--          Php Injection -->
        <?php foreach ($twiits as $twiit): ?>
            <div class="article">
                <img src="<?= $twiit->getAvatarUrl() ?>" alt="avatar of <?= $twiit->getUsername() ?>">
                <h2><?= $twiit->getUsername() ?></h2>
                <div class="meta-data">
                    <strong>Date <?= $twiit->getDatePosted() ?></strong>
                </div>
                <p><?= $twiit->getContent() ?></p>
            </div>
        <?php endforeach; ?>
        <!--          Php Injection -->

    </div>
</main>

</body>
</html>

