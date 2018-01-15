<?php

namespace ResponseMapperTests\Fixtures\Models\LinkedInModels;

use ResponseMapperTests\Fixtures\Models\ArrayAccessObject;

/**
 * Class Locations
 * @package ResponseMapperTests
 */
class Locations extends ArrayAccessObject
{
    /** @var Address */
    protected $address;

    /** @var string */
    protected $staffCountRange;

    /** @var string */
    protected $locationType;

    /**
     * @param Address $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @param string $staffCountRange
     */
    public function setStaffCountRange($staffCountRange)
    {
        $this->staffCountRange = $staffCountRange;
    }

    /**
     * @param string $locationType
     */
    public function setLocationType($locationType)
    {
        $this->locationType = $locationType;
    }

    /**
     * @return Address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @return string
     */
    public function getStaffCountRange()
    {
        return $this->staffCountRange;
    }

    /**
     * @return string
     */
    public function getLocationType()
    {
        return $this->locationType;
    }
}
