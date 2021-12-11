<?php

class Twiit
{
    private $_id;
    private $_username;
    private $_avatarUrl;
    private $_datePosted;
    private $_content;

    /**
     * @param $id
     * @param $username
     * @param $avatarUrl
     * @param $datePosted
     * @param $content
     */
    public function __construct($id, $username, $avatarUrl, $datePosted, $content)
    {
        $this->_id = $id;
        $this->_username = $username;
        $this->_avatarUrl = $avatarUrl;
        $this->_datePosted = $datePosted;
        $this->_content = $content;
    }


    public function getId() {return $this->_id;}
    public function getUsername(){return $this->_username;}
    public function getAvatarUrl(){return $this->_avatarUrl;}
    public function getDatePosted(){return $this->_datePosted;}
    public function getContent(){return $this->_content;}


    public function setUsername($username): void
    {
        $this->_username = $username;
    }
    public function setAvatarUrl($userPicture): void
    {
        $this->_avatarUrl = $userPicture;
    }
    public function setDatePosted($datePosted): void
    {
        $this->_datePosted = $datePosted;
    }

    public function setContent($content): void
    {
        $this->_content = $content;
    }



}
