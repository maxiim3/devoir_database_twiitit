<?php
header('index.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>TITLE</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>

<main class="container">
    <div class="wall">

        <fieldset>
            <form name="newPost" id="newPost" method="get" action='index.php' class="form">
                <label> Pseudo :
                    <select name="userID" >
                        <?php foreach ($usersTab as $user) :?>
                            <option value="<?=$user->getId()?>"> <?=$user->getUserName()?> </option>
                        <?endforeach; ?>
                    </select></label>
                <label>Post:
                    <input type="text" placeholder="Express yourself" name="content" value="" required>
                </label>
                <label>Date :
                    <input type="date" placeholder="Default date Today" name="date_posted" value="">
                </label>
                <button type="submit">Twiit it !</button>
                <button type="reset">Reset</button>
            </form>
        </fieldset>

        <section class="wall-post">
            <?php foreach ($postsTab as $post): ?>
                <fieldset class="post">
                    <form name="modifyPost" id="modifyPost_<?=$post->getId()?>" method="post" action="index.php" class="form">
                        <aside>
                            <img src="<?= $usersTab[$post->getUserID()-1]->getAvatarURL()?>" alt="avatar of <?= $usersTab[$post->getUserID()-1]->getUserName()?>">
                        </aside>
                        <article>
                            <h2><?= $usersTab[$post->getUserID()-1]->getUserName()?></h2>
                            <textarea form="modifyPost_<?=$post->getId()?>" name="text_modify" autocapitalize="sentences"  rows="3" cols="35"><?= $post->getContent() ?></textarea>
                            <button type="submit">modify</button>
                            <button type="reset">delete</button>
                            <strong>Date : <?= $post->getPostDate() ?></strong>
                        </article>
                    </form>
                </fieldset>
            <?php endforeach; ?>
        </section>

    </div>
</main>


<script src="script.js" defer></script>
</body>

</html>

