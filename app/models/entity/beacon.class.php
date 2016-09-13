<?php

Class Beacon{

    private $id_chain;
    private $localization;
    private $latitude;
    private $longitude;
    private $mac;
    private $code;

    /**
     * Get the value of Id Chain
     *
     * @return mixed
     */
    public function getIdChain()
    {
        return $this->id_chain;
    }

    /**
     * Set the value of Id Chain
     *
     * @param mixed id_chain
     *
     * @return self
     */
    public function setIdChain($id_chain)
    {
        $this->id_chain = $id_chain;

        return $this;
    }

    /**
     * Get the value of Localization
     *
     * @return mixed
     */
    public function getLocalization()
    {
        return $this->localization;
    }

    /**
     * Set the value of Localization
     *
     * @param mixed localization
     *
     * @return self
     */
    public function setLocalization($localization)
    {
        $this->localization = $localization;

        return $this;
    }

    /**
     * Get the value of Latitude
     *
     * @return mixed
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set the value of Latitude
     *
     * @param mixed latitude
     *
     * @return self
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get the value of Longitude
     *
     * @return mixed
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set the value of Longitude
     *
     * @param mixed longitude
     *
     * @return self
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get the value of Mac
     *
     * @return mixed
     */
    public function getMac()
    {
        return $this->mac;
    }

    /**
     * Set the value of Mac
     *
     * @param mixed mac
     *
     * @return self
     */
    public function setMac($mac)
    {
        $this->mac = $mac;

        return $this;
    }

    /**
     * Get the value of Code
     *
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set the value of Code
     *
     * @param mixed code
     *
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

}
