<?php /** @noinspection ALL */

require_once('DbConnect.php');
require_once('Post.php');
require_once('User.php');
/**
 * Connexion to DDB
 */
    $pdo = DbConnect::getCnxToDB();

/**
 * Methods for requesting mysql server
 */
    $userName;
    $avatarURL;
    function getUsersData(): string
    {
        return "SELECT id, username, usermail, avatar_url, year_of_birth FROM user ORDER BY id ASC;";
    }
    function getPostsData(): string
    {
        return "SELECT id, user_id, date_posted, content FROM posts ORDER BY date_posted DESC ;";
    }
    function createUser($userName, $avatarURL): string
    {
        return "insert into `user` (`avatar_url`, `username`) VALUE ('$avatarURL', '$userName');";
    }
    function createPost($id, $userID, $date, $content): string
    {
        return "insert into `posts` (`id`, `user_id`, `date_posted`, `content`) VALUE ($id, '$userID', '$date', '$content');";
    }
    function modifyPost($id, $content): string
    {
        return "update `posts` set `content` = '$content' where `id` = $id;";
    }


/**
 * GETTING USER DATAS FROM DB
 */
    $usersTab = [];
    $getUsers = $pdo->query(getUsersData());
    foreach ($getUsers as $user) {
        $usersTab[] =
            new User(
                $user['id'],
                $user['username'],
                $user['avatar_url'],
                $user['year_of_birth']  );
    }

/**
 * GETTING POST DATAS FROM DB
 */
    $postsTab = [];
    $getPosts = $pdo->query(getPostsData());
    foreach ($getPosts as $post) {
        $postsTab[] = new Post(
            $post['id'],
            $post['user_id'],
            $post['date_posted'],
            $post['content']
        );
    }

/**
 * Render view
 */
    require_once 'home.php';

/**
 * Create new post
 */
    $id         = count($postsTab) + 1;
    $userID     = $_GET["userID"];
    $datePosted = $_GET["date_posted"];
    $content    = $_GET["content"];
    try {
        $pdo -> query(createPost($id, $userID, $datePosted, $content));
    }
    catch(Exception $e){ $e->getMessage();}




