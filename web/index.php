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
                from user join twiit on (user.username = twiit.username);");
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

