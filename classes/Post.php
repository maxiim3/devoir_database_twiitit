<?php

class Post
{
    private $_id;
    private $_userID;
    private $_postDate;
    private $_content;

    /**
     * @param $id
     * @param $userID
     * @param $postDate
     * @param $content
     */
    public function __construct($id, $userID, $postDate, $content)
    {
        $this->_id = $id;
        $this->_userID = $userID;
        $this->_postDate = $postDate;
        $this->_content = $content;
    }


    public function getId() {return $this->_id;}
    public function getUserID(){return $this->_userID;}
    public function getPostDate(){return $this->_postDate;}
    public function getContent(){return $this->_content;}


    public function setUserID($userID): void
    {
        $this->_userID = $userID;
    }
    public function setPostDate($datePosted): void
    {
        $this->_postDate = $datePosted;
    }

    public function setContent($content): void
    {
        $this->_content = $content;
    }



}
