<?php /** @noinspection ALL */

require_once ('../classes/Twiit.php');
require_once ('../classes/DbConnect.php');

/**
 * Connexion to DB
 */
$pdo = DbConnect::getCnxToDB();

/**
 * Pull request from dB table user_twiit
 */


/**
 * Get twiits from DB
 */
$rows = $pdo->query(" Select twiitit.user.id, twiitit.user.avatar_url, twiitit.user.username, twiitit.twiit.date_posted, twiitit.twiit.content
                from user join twiit on (user.username = twiit.username)  ORDER BY date_posted desc;");
$twiits = [];

/**
 * Create twiits array
 */
foreach ($rows as $row) {
    $twiits[] = new Twiit(
        $row['id'],
        $row['username'],
        $row['avatar_url'],
        $row['date_posted'],
        $row['content']
    );
}

// Render view
require_once '../views/home.php';


/**
 * Send datas to DB
 */
$avatar = $_POST["avatar"];
$username = $_POST["username"];
$content = $_POST["content"];
$date_posted = $_POST["date_posted"];

$insert_to_user = "insert into `user` (`avatar_url`, `username`) VALUE ('$avatar', '$username');";
$insert_to_twiit = "insert into `twiit` (`username`, `date_posted`, `content`) VALUE ('$username', '$date_posted', '$content');";

$send_request_user = $pdo->query($insert_to_user);
$send_request_twiit = $pdo->query($insert_to_twiit);

if ($send_request)
{
    echo "success";
}

