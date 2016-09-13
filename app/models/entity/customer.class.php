<?php

Class Customer{

    private $company_name;
    private $fantasy_name;
    private $cnpj;
    private $ie;
    private $im;
    private $address;
    private $complement;
    private $neighborhood;
    private $city;
    private $state;
    private $phone;
    private $email;
    private $contact;
    private $logo_url;    

    /**
     * Get the value of Company Name
     *
     * @return mixed
     */
    public function getCompanyName()
    {
        return $this->company_name;
    }

    /**
     * Set the value of Company Name
     *
     * @param mixed company_name
     *
     * @return self
     */
    public function setCompanyName($company_name)
    {
        $this->company_name = $company_name;

        return $this;
    }

    /**
     * Get the value of Fantasy Name
     *
     * @return mixed
     */
    public function getFantasyName()
    {
        return $this->fantasy_name;
    }

    /**
     * Set the value of Fantasy Name
     *
     * @param mixed fantasy_name
     *
     * @return self
     */
    public function setFantasyName($fantasy_name)
    {
        $this->fantasy_name = $fantasy_name;

        return $this;
    }

    /**
     * Get the value of Cnpj
     *
     * @return mixed
     */
    public function getCnpj()
    {
        return $this->cnpj;
    }

    /**
     * Set the value of Cnpj
     *
     * @param mixed cnpj
     *
     * @return self
     */
    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;

        return $this;
    }

    /**
     * Get the value of Ie
     *
     * @return mixed
     */
    public function getIe()
    {
        return $this->ie;
    }

    /**
     * Set the value of Ie
     *
     * @param mixed ie
     *
     * @return self
     */
    public function setIe($ie)
    {
        $this->ie = $ie;

        return $this;
    }

    /**
     * Get the value of Im
     *
     * @return mixed
     */
    public function getIm()
    {
        return $this->im;
    }

    /**
     * Set the value of Im
     *
     * @param mixed im
     *
     * @return self
     */
    public function setIm($im)
    {
        $this->im = $im;

        return $this;
    }

    /**
     * Get the value of Address
     *
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set the value of Address
     *
     * @param mixed address
     *
     * @return self
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get the value of Complement
     *
     * @return mixed
     */
    public function getComplement()
    {
        return $this->complement;
    }

    /**
     * Set the value of Complement
     *
     * @param mixed complement
     *
     * @return self
     */
    public function setComplement($complement)
    {
        $this->complement = $complement;

        return $this;
    }

    /**
     * Get the value of Neighborhood
     *
     * @return mixed
     */
    public function getNeighborhood()
    {
        return $this->neighborhood;
    }

    /**
     * Set the value of Neighborhood
     *
     * @param mixed neighborhood
     *
     * @return self
     */
    public function setNeighborhood($neighborhood)
    {
        $this->neighborhood = $neighborhood;

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
     * Get the value of Contact
     *
     * @return mixed
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Set the value of Contact
     *
     * @param mixed contact
     *
     * @return self
     */
    public function setContact($contact)
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * Get the value of Logo Url
     *
     * @return mixed
     */
    public function getLogoUrl()
    {
        return $this->logo_url;
    }

    /**
     * Set the value of Logo Url
     *
     * @param mixed logo_url
     *
     * @return self
     */
    public function setLogoUrl($logo_url)
    {
        $this->logo_url = $logo_url;

        return $this;
    }

}
