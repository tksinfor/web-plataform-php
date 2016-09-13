<?php

Class Consumer{

    private $name;
    private $age_min;
    private $age_max;
    private $photo_url;
    private $city;
    private $state;
    private $birth;
    private $email;
    private $gender;
    private $phone;
    private $device_id;    

    /**
     * Get the value of Name
     *
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of Name
     *
     * @param mixed name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of Age Min
     *
     * @return mixed
     */
    public function getAgeMin()
    {
        return $this->age_min;
    }

    /**
     * Set the value of Age Min
     *
     * @param mixed age_min
     *
     * @return self
     */
    public function setAgeMin($age_min)
    {
        $this->age_min = $age_min;

        return $this;
    }

    /**
     * Get the value of Age Max
     *
     * @return mixed
     */
    public function getAgeMax()
    {
        return $this->age_max;
    }

    /**
     * Set the value of Age Max
     *
     * @param mixed age_max
     *
     * @return self
     */
    public function setAgeMax($age_max)
    {
        $this->age_max = $age_max;

        return $this;
    }

    /**
     * Get the value of Photo Url
     *
     * @return mixed
     */
    public function getPhotoUrl()
    {
        return $this->photo_url;
    }

    /**
     * Set the value of Photo Url
     *
     * @param mixed photo_url
     *
     * @return self
     */
    public function setPhotoUrl($photo_url)
    {
        $this->photo_url = $photo_url;

        return $this;
    }

    /**
     * Get the value of City
     *
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set the value of City
     *
     * @param mixed city
     *
     * @return self
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get the value of State
     *
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set the value of State
     *
     * @param mixed state
     *
     * @return self
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get the value of Birth
     *
     * @return mixed
     */
    public function getBirth()
    {
        return $this->birth;
    }

    /**
     * Set the value of Birth
     *
     * @param mixed birth
     *
     * @return self
     */
    public function setBirth($birth)
    {
        $this->birth = $birth;

        return $this;
    }

    /**
     * Get the value of Email
     *
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of Email
     *
     * @param mixed email
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of Gender
     *
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set the value of Gender
     *
     * @param mixed gender
     *
     * @return self
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get the value of Phone
     *
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set the value of Phone
     *
     * @param mixed phone
     *
     * @return self
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get the value of Device Id
     *
     * @return mixed
     */
    public function getDeviceId()
    {
        return $this->device_id;
    }

    /**
     * Set the value of Device Id
     *
     * @param mixed device_id
     *
     * @return self
     */
    public function setDeviceId($device_id)
    {
        $this->device_id = $device_id;

        return $this;
    }

}
