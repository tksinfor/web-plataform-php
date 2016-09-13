<?php

Class User{

    private $username;
    private $password;
    private $date_creation;

    /**
     * Get the value of Username
     *
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set the value of Username
     *
     * @param mixed username
     *
     * @return self
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get the value of Password
     *
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of Password
     *
     * @param mixed password
     *
     * @return self
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of Date Creation
     *
     * @return mixed
     */
    public function getDateCreation()
    {
        return $this->date_creation;
    }

    /**
     * Set the value of Date Creation
     *
     * @param mixed date_creation
     *
     * @return self
     */
    public function setDateCreation($date_creation)
    {
        $this->date_creation = $date_creation;

        return $this;
    }

}
