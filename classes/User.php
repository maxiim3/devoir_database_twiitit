<?php

class User
{

    private $_id;
    private $_userName;
    private $_avatarURL;
    private $_birth;

    /**
     * @param $_id
     * @param $_userName
     * @param $_avatarURL
     * @param $_birth
     */
    public function __construct($id, $userName, $avatarURL, $birth)
    {
        $this->_id = $id;
        $this->_userName = $userName;
        $this->_avatarURL = $avatarURL;
        $this->_birth = $birth;
    }


    /**
     * @return mixed
     */
    public function getId() {return $this->_id;}
    public function getUserName() {return $this->_userName;}
    public function getAvatarURL() {return $this->_avatarURL;}
    public function getBirth() {return $this->_birth;}

    public function setId($id): void
    {
        $this->_id = $id;
    }

    public function setUserName($userName): void
    {
        $this->_userName = $userName;
    }

    public function setAvatarURL($avatarURL): void
    {
        $this->_avatarURL = $avatarURL;
    }

    public function setBirth($birth): void
    {
        $this->_birth = $birth;
    }


}