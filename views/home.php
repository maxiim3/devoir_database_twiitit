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

        <form name="newPost" method="post" action="index.php">
            <label> Username:
                <select name="username" >
                    <?php foreach ($usersTab as $user): ?>
                        va
                        <option value="<?= $user->getUserName()?>"><?= $user->getUserName()?></option>
                    <?php endforeach; ?>
                </select></label>

            <label>Your text<input type="text" placeholder="Express yourself" name="content" value="" required></label>
            <label>Date<input type="date" placeholder="Default date Today" name="date_posted" value=""></label>
            <button type="submit">Twiit it !</button>
            <button type="reset">Reset</button>
        </form>

<!--                  Php Injection-->
        <?php foreach ($postsTab as $post): ?>
            <div class="article">
                <img src="<?= $usersTab[$post->getUserID()-1]->getAvatarURL()?>" alt="avatar of <?= $usersTab[$post->getUserID()-1]->getUserName()?>">
                <h2><?= $usersTab[$post->getUserID()-1]->getUserName()?></h2>
                <div class="meta-data">
                    <strong>Date : <?= $post->getPostDate() ?></strong>
            </div>
                    <textarea autocapitalize="sentences" readonly rows="3" cols="35"><?= $post->getContent() ?></textarea>
                    <button type="button">modify</button>
            </div>
        <?php endforeach; ?>
        <!--          Php Injection -->

    </div>
</main>

<script src="/web/script.js" defer></script>
</body>
</html>

