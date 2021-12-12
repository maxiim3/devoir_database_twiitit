<?php

class Requests
{
//    private static $userID;
    private static $userName;
    private static $avatarURL;
//    private static $datePosted;
//    private static $dateContent;

    private function __construct(){}

    /**
     * @return string
     */
    public static function getUsersData(): string
    {
        return "SELECT id, username, usermail, avatar_url, year_of_birth FROM user ORDER BY id ASC;";
    }

    /**
     * @return string
     */
    public static function getPostsData(): string
    {
        return "SELECT id, user_id, date_posted, content FROM posts ORDER BY date_posted DESC ;";
    }

    public static function createUser($userName, $avatarURL): string
    {
        return "insert into `user` (`avatar_url`, `username`) VALUE ('$avatarURL', '$userName');";
    }

    public static function createPost($username, $date, $content): string
    {
        return "insert into `posts` (`username`, `date_posted`, `content`) VALUE ('$username', '$date', '$content');";
    }




}