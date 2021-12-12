<?php /** @noinspection ALL */

require_once ('../classes/Post.php');
require_once ('../classes/User.php');
require_once ('../classes/Requests.php');
require_once ('../classes/DbConnect.php');

/**
 * Connexion to DB
 */
$pdo = DbConnect::getCnxToDB();

/**
 * Pull request from dB table user_twiit
 */


/**
 * GETTING USER DATAS FROM DB
 */
$getUsers = $pdo->query(Requests::getUsersData());
$usersTab = [];

foreach ($getUsers as $user) {
    $usersTab[] = new User(
        $user['id'],
        $user['username'],
        $user['avatar_url'],
        $user['year_of_birth']
    );
}
/**
 * GETTING POST DATAS FROM DB
 */
$getPosts = $pdo->query(Requests::getPostsData());
$postsTab = [];

foreach ($getPosts as $post) {
    $postsTab[] = new Post(
        $post['id'],
        $post['user_id'],
        $post['date_posted'],
        $post['content']
    );
}



// Render view
require_once '../views/home.php';


/**
 * Send datas to DB
 */

try {
    $pdo->query(
        Requests::createPost(
            $_POST["username"],
            $_POST["date_posted"],
            $_POST["content"]
        )
    );
    echo "success!";
}
catch (Exception $e) {
    echo "ERROR SENDING DATAS: {$e->getMessage()}<br><br>";
}


