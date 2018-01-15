<?php

namespace ResponseMapperTests\Fixtures\Models\LinkedInModels;

use ResponseMapperTests\Fixtures\Models\ArrayAccessObject;

/**
 * Class Address
 * @package ResponseMapperTests
 */
class Address extends ArrayAccessObject
{
    /** @var string */
    protected $country;

    /** @var string */
    protected $geographicArea;

    /** @var string */
    protected $city;

    /** @var string */
    protected $line1;

    /**
     * @param string $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * @param string $geographicArea
     */
    public function setGeographicArea($geographicArea)
    {
        $this->geographicArea = $geographicArea;
    }

    /**
     * @param string $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @param string $line1
     */
    public function setLine1($line1)
    {
        $this->line1 = $line1;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @return string
     */
    public function getGeographicArea()
    {
        return $this->geographicArea;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @return string
     */
    public function getLine1()
    {
        return $this->line1;
    }
}
