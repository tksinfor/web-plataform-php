<?php

Class Campaign{

private $id_customer;
private $title;
private $summary;
private $description;
private $main_image_url;
private $summary_image_url;
private $date_start;
private $date_stop;
private $age_min;
private $age_max;
private $aproved;

    /**
     * Get the value of Id Customer
     *
     * @return mixed
     */
    public function getIdCustomer()
    {
        return $this->id_customer;
    }

    /**
     * Set the value of Id Customer
     *
     * @param mixed id_customer
     *
     * @return self
     */
    public function setIdCustomer($id_customer)
    {
        $this->id_customer = $id_customer;

        return $this;
    }

    /**
     * Get the value of Title
     *
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of Title
     *
     * @param mixed title
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of Summary
     *
     * @return mixed
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * Set the value of Summary
     *
     * @param mixed summary
     *
     * @return self
     */
    public function setSummary($summary)
    {
        $this->summary = $summary;

        return $this;
    }

    /**
     * Get the value of Description
     *
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of Description
     *
     * @param mixed description
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of Main Image Url
     *
     * @return mixed
     */
    public function getMainImageUrl()
    {
        return $this->main_image_url;
    }

    /**
     * Set the value of Main Image Url
     *
     * @param mixed main_image_url
     *
     * @return self
     */
    public function setMainImageUrl($main_image_url)
    {
        $this->main_image_url = $main_image_url;

        return $this;
    }

    /**
     * Get the value of Summary Image Url
     *
     * @return mixed
     */
    public function getSummaryImageUrl()
    {
        return $this->summary_image_url;
    }

    /**
     * Set the value of Summary Image Url
     *
     * @param mixed summary_image_url
     *
     * @return self
     */
    public function setSummaryImageUrl($summary_image_url)
    {
        $this->summary_image_url = $summary_image_url;

        return $this;
    }

    /**
     * Get the value of Date Start
     *
     * @return mixed
     */
    public function getDateStart()
    {
        return $this->date_start;
    }

    /**
     * Set the value of Date Start
     *
     * @param mixed date_start
     *
     * @return self
     */
    public function setDateStart($date_start)
    {
        $this->date_start = $date_start;

        return $this;
    }

    /**
     * Get the value of Date Stop
     *
     * @return mixed
     */
    public function getDateStop()
    {
        return $this->date_stop;
    }

    /**
     * Set the value of Date Stop
     *
     * @param mixed date_stop
     *
     * @return self
     */
    public function setDateStop($date_stop)
    {
        $this->date_stop = $date_stop;

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
     * Get the value of Aproved
     *
     * @return mixed
     */
    public function getAproved()
    {
        return $this->aproved;
    }

    /**
     * Set the value of Aproved
     *
     * @param mixed aproved
     *
     * @return self
     */
    public function setAproved($aproved)
    {
        $this->aproved = $aproved;

        return $this;
    }

}
